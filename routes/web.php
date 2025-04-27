<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.master');
});


Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});
