<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Jajan;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Nama pengguna harus diisi.',
            'password.required' => 'Kata sandi harus diisi.',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $admin->checkPassword($request->password)) {
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);
            return redirect('/admin/dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['login' => 'Nama pengguna atau kata sandi salah.']);
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        $totalJajans = Jajan::count();
        $totalRatings = Rating::count();
        $averageRating = Rating::avg('nilai') ?? 0;

        $recentJajans = Jajan::latest()->take(5)->get();
        $recentRatings = Rating::with('jajan')->latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'totalJajans',
            'totalRatings',
            'averageRating',
            'recentJajans',
            'recentRatings'
        ));
    }

    public function logout()
    {
        session()->flush();
        return redirect('/')->with('success', 'Logout berhasil!');
    }

    public function jajanIndex()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        $jajans = Jajan::withCount('ratings')
                       ->withAvg('ratings', 'nilai')
                       ->paginate(10);

        return view('admin.jajan.index', compact('jajans'));
    }

    public function jajanCreate()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        return view('admin.jajan.create');
    }

    public function jajanStore(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'judul.max' => 'Judul maksimal 150 karakter.',
            'deskripsi_singkat.required' => 'Deskripsi singkat harus diisi.',
            'deskripsi_singkat.max' => 'Deskripsi singkat maksimal 255 karakter.',
            'deskripsi_lengkap.required' => 'Deskripsi lengkap harus diisi.',
            'gambar.required' => 'Gambar harus dipilih.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->storeAs('public/jajan', $filename);

        Jajan::create([
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'gambar' => $filename,
        ]);

        return redirect('/admin/jajan')->with('success', 'Jajan berhasil ditambahkan!');
    }

    public function jajanEdit(Jajan $jajan)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        return view('admin.jajan.edit', compact('jajan'));
    }

    public function jajanUpdate(Request $request, Jajan $jajan)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'judul.max' => 'Judul maksimal 150 karakter.',
            'deskripsi_singkat.required' => 'Deskripsi singkat harus diisi.',
            'deskripsi_singkat.max' => 'Deskripsi singkat maksimal 255 karakter.',
            'deskripsi_lengkap.required' => 'Deskripsi lengkap harus diisi.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
        ];

        if ($request->hasFile('gambar')) {
            // Delete old image
            Storage::delete('public/jajan/' . $jajan->gambar);

            $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public/jajan', $filename);
            $data['gambar'] = $filename;
        }

        $jajan->update($data);

        return redirect('/admin/jajan')->with('success', 'Jajan berhasil diperbarui!');
    }

    public function jajanDestroy(Jajan $jajan)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        // Delete image
        Storage::delete('public/jajan/' . $jajan->gambar);

        $jajan->delete();

        return redirect('/admin/jajan')->with('success', 'Jajan berhasil dihapus!');
    }

    public function resetRating(Jajan $jajan)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin-login');
        }

        $jajan->ratings()->delete();

        return redirect()->back()->with('success', 'Rating berhasil direset!');
    }

   public function ratingsIndex(Request $request)
{
    if (!session('admin_logged_in')) {
        return redirect('/admin-login');
    }

    // Hitung statistik
    $totalRatings = Rating::count();
    $totalReviews = Rating::whereNotNull('ulasan')->count();
    $averageRating = Rating::avg('nilai') ?? 0;

    // Ambil semua jajan untuk filter
    $jajans = Jajan::all();

    // Query rating
    $query = Rating::with('jajan')->latest();

    if ($request->filled('jajan')) {
        $query->where('jajan_id', $request->jajan);
    }

    if ($request->filled('rating')) {
        $query->where('nilai', $request->rating);
    }

    $ratings = $query->paginate(20);

    return view('admin.ratings.index', compact(
        'ratings',
        'totalRatings',
        'totalReviews',
        'averageRating',
        'jajans'
    ));
}

public function ratingDestroy($id)
{
    if (!session('admin_logged_in')) {
        return redirect('/admin-login');
    }

    $rating = Rating::findOrFail($id);
    $rating->delete();

    return redirect()->route('admin.ratings.index')->with('success', 'Rating berhasil dihapus!');
}

}
