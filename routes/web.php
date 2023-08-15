<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Auth::routes([
    'verify'=> true
]);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/admin', 'HomeController@admin')->name('admin');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

require __DIR__.'/auth.php';