<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Customers;
use App\Http\Controllers\Admin\Order;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Setting;
use App\Http\Controllers\Admin\UserManagement;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homeProductController;
use App\Models\Admin\Category;
use App\Http\Middleware\adminCheck;
use App\Http\Middleware\CheckActive;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\SocialAuthController;


Route::prefix('/')
    ->middleware([CheckActive::class])
    ->group(function () {
        //::get('/', [CategoryController::class, 'showCategoriesMaster']);

        Route::get('/', function () {
            $categories = Category::all();
            return view('frontend.master', compact('categories'))
                ->with('frontend.categories', $categories);
        });

        Route::get('about', function () {
            return view('frontend.about');
        });

        Route::get('contact', function () {
            return view('frontend.contact');
        });

        Route::get('cart', function () {
            return view('frontend.cart');
        });

        Route::get('/register', [AuthController::class, 'showRegisterForm']);

        Route::post('/register', [AuthController::class, 'register'])
            ->name('auth.register');

        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

        Route::post('/login', [AuthController::class, 'login'])
            ->name('auth.login');

        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


        Route::get('/profile', [ProfileController::class, 'profile'])
            ->middleware('auth');

        Route::post('/profile/upload-image', [\App\Http\Controllers\ProfileController::class, 'uploadImage'])
            ->name('profile.uploadImage')
            ->middleware('auth');

        Route::get('/products/{id}', [homeProductController::class, 'singleProduct']);

        Route::get('/search', [homeProductController::class, 'search'])
            ->name('frontend.search');
    });

Route::prefix('admin')
    ->middleware(['auth',adminCheck::class])
    ->group(function () {
        Route::get('/', [AdminController::class, 'showAdminPanel']);
        Route::get('/categories', [CategoryController::class, 'showCategories']);
        Route::get('/categories/add', [CategoryController::class, 'addCategory']);

        Route::post('/categories', [CategoryController::class, 'createCategory'])
            ->name('categories.create');

        Route::get('/customers', [Customers::class, 'showCustomers']);
        Route::get('/orders', [Order::class, 'showOrders']);
        Route::get('/products', [ProductController::class, 'showProducts']);


        Route::get('/products/add', [ProductController::class, 'showAddProducts']);
        Route::post('/products', [ProductController::class, 'createProduct'])->name('products.add');

        Route::get('/shopInfo', [AdminController::class, 'showShopInfo']);
        Route::get('/settings', [Setting::class, 'showSettings']);
        Route::get('/users', [UserManagement::class, 'showUsers']);

        Route::post('/ban-user', [UserManagement::class, 'banUser'])->name('ban.user');
    });

    Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
