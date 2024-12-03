<?php

use App\Http\Controllers\CustomerController;
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

Route::middleware(['auth', 'verified','hotel'])->group(function () {
    Route::get('/pending', [HotelController::class, 'hotelsDashboard'])->name('pending');
    Route::get('/history', [HotelController::class, 'history'])->name('history');
    Route::get('/approve/{booking}', [HotelController::class, 'aprrove'])->name('approve');
    Route::get('/decline/{booking}', [HotelController::class, 'decline'])->name('decline');
    Route::post('/hotels', [HotelController::class, 'store'])->name('hotel.create');
    Route::get('/profileh', [HotelController::class, 'view'])->name('profileh');
});
Route::middleware(['auth', 'verified','hotel'])->group(function () {

    Route::get('/customer/pending', [CustomerController::class, 'pending'])->name('cus.pending');
    Route::get('/customer/history', [CustomerController::class, 'history'])->name('cus.history');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hotel/{hotel}', [WebController::class, 'show'])->name('hotel.show');
Route::post('/reserve', [WebController::class, 'reserve'])->name('hotel.reserve')->middleware('booking');

require __DIR__.'/auth.php';
