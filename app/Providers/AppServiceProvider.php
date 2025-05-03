<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        View::composer(['frontend.*', 'admin.*'], function ($view) {
//            $view->with([
//                'categories' => Category::all(),
//                'products' => Product::all(),
//            ]);
//        });


// ارسال ۸ محصول اخیر به ویوهای frontend.* و admin.*
        View::composer(['frontend.*', 'admin.*'], function ($view) {
            $products = Product::orderBy('created_at', 'desc')->take(8)->get();
            $view->with('products', $products);
        });

        // ارسال دسته‌بندی‌ها به ویوهای frontend.*
        View::composer(['frontend.*', 'admin.*'], function ($view) {
            $view->with('categories', Category::all());
        });

    }
}
