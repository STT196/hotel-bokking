<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/',([WebController::class,'index']))->name('homepage');

Route::get('/test', function () {
    return view('Untitled-1');
})->name('test');


// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

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
    Route::post('/hotels', [HotelController::class, 'store'])->name('hotel.create');
});

Route::get('/hotel/{hotel}', [WebController::class, 'show'])->name('hotel.show');

require __DIR__.'/auth.php';
