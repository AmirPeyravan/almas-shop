<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('frontend.master');
});


/*Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
}); */

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/profile', function () {
    return view('frontend.profile');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

/////////////////////////////////////////

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');

Route::post('/profile/upload-image', [\App\Http\Controllers\ProfileController::class, 'uploadImage'])->name('profile.uploadImage')->middleware('auth');





