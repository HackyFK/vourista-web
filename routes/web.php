<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JajanController;
use App\Http\Controllers\AdminController;

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


Route::get('/jajan', [JajanController::class, 'index'])->name('jajan.index'); // 👉 daftar jajan
Route::get('/jajan/{jajan}', [JajanController::class, 'show'])->name('jajan.show');
Route::post('/jajan/{jajan}/rate', [JajanController::class, 'rate'])->name('jajan.rate');

Route::get('/about', function () {
    return view('about'); // pastikan ada
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // pastikan ada
})->name('contact');

Route::get('/partnership', function () {
    return view('partnership'); // pastikan ada
})->name('partner');

Route::get('/menu', function () {
    return view('menu'); // pastikan ada
})->name('menu');



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

});
