<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\DataListrikController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-listrik', [DataListrikController::class, 'index'])->name('data-listrik.index');
Route::post('/data-listrik', [DataListrikController::class, 'store'])->name('data-listrik.store');
