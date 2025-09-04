<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Jajan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Jajan::with('ratings');

        // Search functionality
        if ($request->has('cari') && !empty($request->cari)) {
            $query->where('judul', 'like', '%' . $request->cari . '%')
                  ->orWhere('deskripsi_singkat', 'like', '%' . $request->cari . '%');
        }

        // Filter functionality
        if ($request->has('filter')) {
            switch ($request->filter) {
                case 'rating_tertinggi':
                    $query->withAvg('ratings', 'nilai')
                          ->orderBy('ratings_avg_nilai', 'desc');
                    break;
                case 'terbaru':
                    $query->latest();
                    break;
                default:
                    $query->latest();
            }
        } else {
            $query->latest();
        }

        $jajans = $query->paginate(12);
        
        // Stats for homepage
        $totalJajans = Jajan::count();
        $totalRatings = \App\Models\Rating::count();
        $ratingTertinggi = Jajan::withAvg('ratings', 'nilai')
                               ->orderBy('ratings_avg_nilai', 'desc')
                               ->first()?->ratings_avg_nilai ?? 0;

        return view('home', compact('jajans', 'totalJajans', 'totalRatings', 'ratingTertinggi'));
    }
}