<?php

use App\Http\Controllers\DashboardListrikController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\DataListrikController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', [DashboardListrikController::class, 'indexhome'])->name('home');
Route::get('/data-listrik', [DataListrikController::class, 'index'])->name('data-listrik.index');
Route::post('/data-listrik', [DataListrikController::class, 'store'])->name('data-listrik.store');

Route::get('/datalistrik', [DashboardListrikController::class, 'index'])->name('datalistrik.index');
Route::get('/ubah-listrik', [DashboardListrikController::class, 'indexubah'])->name('ubah-listrik.indexubah');
Route::post('/ubah-listrik', [DashboardListrikController::class, 'store'])->name('ubah-listrik.store');

// routes/web.php

Route::get('/login', function () {
    return view('login');  // Menampilkan login.blade.php
})->name('login');

Route::get('/signup', function () {
    return view('signup');  // Menampilkan signup.blade.php
})->name('signup');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/gallery', function () {
    return view('admin.gallery');
});
Route::get('/gallery-ubah', function () {
    return view('admin.gallery-ubah');
});
Route::get('/gallery-delete', function () {
    return view('admin.gallery-delete');
});

