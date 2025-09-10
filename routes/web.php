<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JajanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
// Intro jadi halaman awal /
Route::get('/', function () {
    return view('intro'); // splash screen / animasi pembuka
})->name('intro');

// Home pindah ke /home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Jajan routes
Route::get('/jajan', [JajanController::class, 'index'])->name('jajan.index');
Route::get('/jajan/{jajan}', [JajanController::class, 'show'])->name('jajan.show');
Route::post('/jajan/{jajan}/rate', [JajanController::class, 'rate'])->name('jajan.rate');

// Static pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/partnership', function () {
    return view('partnership');
})->name('partner');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

/*
|--------------------------------------------------------------------------
| Order System Routes (Public - No Login Required)
|--------------------------------------------------------------------------
*/
Route::prefix('pesanan')->group(function () {
    Route::get('/', [PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/checkout', [PesananController::class, 'create'])->name('pesanan.create');
    Route::post('/add-to-cart', [PesananController::class, 'addToCart'])->name('pesanan.add-to-cart');
    Route::post('/update-cart', [PesananController::class, 'updateCart'])->name('pesanan.update-cart');
    Route::post('/hitung-ongkir', [PesananController::class, 'hitungOngkir'])->name('pesanan.hitung-ongkir');
    Route::post('/store', [PesananController::class, 'store'])->name('pesanan.store');
    Route::get('/success/{pesanan}', [PesananController::class, 'success'])->name('pesanan.success');
    
    Route::get('/reset-cart', function() {
    session()->forget('keranjang');
    return 'Cart cleared';
});

    // 🔹 Tambahan untuk keranjang
    Route::get('/cart-count', [PesananController::class, 'cartCount'])->name('pesanan.cart-count');
    Route::delete('/clear-cart', [PesananController::class, 'clearCart'])->name('pesanan.clear-cart');
    
});

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin-login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login.post');

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    /*
    |----------------------------------------------------------------------
    | Jajan Management
    |----------------------------------------------------------------------
    */
    Route::get('/jajan', [AdminController::class, 'jajanIndex'])->name('admin.jajan.index');
    Route::get('/jajan/create', [AdminController::class, 'jajanCreate'])->name('admin.jajan.create');
    Route::post('/jajan', [AdminController::class, 'jajanStore'])->name('admin.jajan.store');
    Route::get('/jajan/{jajan}/edit', [AdminController::class, 'jajanEdit'])->name('admin.jajan.edit');
    Route::put('/jajan/{jajan}', [AdminController::class, 'jajanUpdate'])->name('admin.jajan.update');
    Route::delete('/jajan/{jajan}', [AdminController::class, 'jajanDestroy'])->name('admin.jajan.destroy');
    Route::post('/jajan/{jajan}/reset-rating', [AdminController::class, 'resetRating'])->name('admin.jajan.reset-rating');

    /*
    |----------------------------------------------------------------------
    | Ratings Management
    |----------------------------------------------------------------------
    */
    Route::get('/ratings', [AdminController::class, 'ratingsIndex'])->name('admin.ratings.index');
    Route::delete('/ratings/{id}', [AdminController::class, 'ratingDestroy'])->name('admin.ratings.destroy');

    /*
    |----------------------------------------------------------------------
    | Orders Management
    |----------------------------------------------------------------------
    */
    Route::get('/pesanan', [AdminController::class, 'pesananIndex'])->name('admin.pesanan.index');
    Route::post('/pesanan/{pesanan}/update-status', [AdminController::class, 'updateStatus'])->name('admin.pesanan.update-status');
});