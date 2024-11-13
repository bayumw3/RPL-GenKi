<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\DataListrikController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', [DataListrikController::class, 'showHomePage'])->name('home');
Route::get('/data-listrik', [DataListrikController::class, 'index'])->name('data-listrik.index');
Route::post('/data-listrik', [DataListrikController::class, 'store'])->name('data-listrik.store');

// routes/web.php

Route::get('/login', function () {
    return view('login');  // Menampilkan login.blade.php
})->name('login');

Route::get('/signup', function () {
    return view('signup');  // Menampilkan signup.blade.php
})->name('signup');

