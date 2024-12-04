<?php

use App\Http\Controllers\AdminController;
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

Route::get('/hotels', [WebController::class, 'hotels'])->name('hotels');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/pending', [HotelController::class, 'hotelsDashboard'])->name('pending');
    Route::get('/history', [HotelController::class, 'history'])->name('history');
    Route::get('/happrove/{booking}', [HotelController::class, 'aprrove'])->name('approve')->middleware('hotel');
    Route::get('/hdecline/{booking}', [HotelController::class, 'decline'])->name('decline')->middleware('hotel');
    Route::post('/hotels', [HotelController::class, 'store'])->name('hotel.create');
    Route::get('/profileh', [HotelController::class, 'view'])->name('profileh');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/customer/pending', [CustomerController::class, 'pending'])->name('cus.pending');
    Route::get('/customer/history', [CustomerController::class, 'history'])->name('cus.history');
    Route::get('/customer/recipet/{booking}', [CustomerController::class, 'recipet'])->name('cus.recipet')->middleware('customer');

});
Route::middleware(['auth', 'verified','admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('/users', [AdminController::class, 'history'])->name('cus.history');
    Route::get('/approve/{booking}', [AdminController::class, 'aprrove'])->name('admin.approve');
    Route::get('/decline/{booking}', [AdminController::class, 'decline'])->name('admin.decline');
    Route::get('/manage', [AdminController::class, 'manage'])->name('manage');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hotel/{hotel}', [WebController::class, 'show'])->name('hotel.show');
Route::post('/reserve', [WebController::class, 'reserve'])->name('hotel.reserve')->middleware('booking');
Route::post('/search', [WebController::class, 'search'])->name('search');


require __DIR__.'/auth.php';
