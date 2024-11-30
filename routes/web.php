<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index-01');
})->name('homepage');

Route::get('/test', function () {
    return view('Untitled-1');
})->name('test');


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotels');

Route::get('/dashboard', function () {
    return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profileh', function () {
    return view('hotels.profile');
})->middleware(['auth', 'verified'])->name('profileh');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
