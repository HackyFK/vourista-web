<?php
// app/Http/Controllers/JajanController.php

namespace App\Http\Controllers;

use App\Models\Jajan;
use App\Models\Rating;
use Illuminate\Http\Request;

class JajanController extends Controller
{

     public function index()
    {
        $jajans = Jajan::with('ratings')
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('jajan.index', compact('jajans'));
    }

    public function show(Jajan $jajan)
    {
        $jajan->load('ratings');
        $latestReviews = $jajan->ratings()
                              ->latest()
                              ->take(10)
                              ->get();

        return view('jajan.detail', compact('jajan', 'latestReviews'));
    }

    public function rate(Request $request, Jajan $jajan)
    {
        $request->validate([
            'nilai' => 'required|integer|min:1|max:10',
            'ulasan' => 'nullable|string|max:1000',
        ], [
            'nilai.required' => 'Rating harus diisi.',
            'nilai.integer' => 'Rating harus berupa angka.',
            'nilai.min' => 'Rating minimal 1.',
            'nilai.max' => 'Rating maksimal 10.',
            'ulasan.max' => 'Ulasan maksimal 1000 karakter.',
        ]);

        Rating::create([
            'jajan_id' => $jajan->id,
            'nilai' => $request->nilai,
            'ulasan' => $request->ulasan,
        ]);

        return redirect()->back()->with('success', 'Rating berhasil diberikan!');
    }
}
   