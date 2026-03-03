<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/profile/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

// Alebo alternatíva
Route::prefix('profile')->group(function () {
    Route::get('/create', [ProfileController::class, 'showForm']);
    Route::post('/result', [ProfileController::class, 'processForm']);
});

Route::get('/example/create', function () {
    return view('example.form');
});