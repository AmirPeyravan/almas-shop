<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/////////////////////////////////////////

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('frontend.profile');
})->middleware('auth');




