<?php

use App\Http\Controllers\DashboardListrikController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\DataListrikController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('auth')->group(function () {
    // Halaman-halaman yang hanya bisa diakses oleh pengguna yang sudah login
    Route::get('/', [DashboardListrikController::class, 'indexhome'])->name('home');
    Route::get('/data-listrik', [DataListrikController::class, 'index'])->name('data-listrik.index');
    Route::post('/data-listrik', [DataListrikController::class, 'store'])->name('data-listrik.store');

    Route::get('/datalistrik', [DashboardListrikController::class, 'index'])->name('datalistrik.index');
    Route::get('/ubah-listrik', [DashboardListrikController::class, 'indexubah'])->name('ubah-listrik.indexubah');
    Route::post('/ubah-listrik', [DashboardListrikController::class, 'store'])->name('ubah-listrik.store');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/gallery-delete', function () {
        return view('admin.gallery-delete');
    });


    Route::get('/gallery', [GalleryController::class, 'indexhome'])->name('gallery.indexhome');
    Route::get('/gallery-ubah', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery-ubah', [GalleryController::class, 'store'])->name('gallery.store');
    // Tambahkan route lainnya yang perlu dilindungi
});




// routes/web.php

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('signup', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('signup', [RegisterController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/check-email', [RegisterController::class, 'checkEmail'])->name('check.email');




