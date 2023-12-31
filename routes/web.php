<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Auth::routes([
    'verify'=> true
]);


Route::post('/update-event-id', 'EventController@updateEventId');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');


Route::get('/delete/{id}', [EventController::class, 'delete'])->name('delete');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    Route::get('/admin', [HomeController::class,'admin'])->name('admin');
    Route::post('/admin', [EventController::class, 'store'])->name('dashboard.post');
    Route::get('/tickets', function () {
        return view('tickets');
    })->name('tickets');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

require __DIR__.'/auth.php';