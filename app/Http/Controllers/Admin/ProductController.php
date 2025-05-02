<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        return view('admin.products');
    }

    public function showAddProducts()
    {
        return view('admin.addProducts');
    }

    public function createProduct(Request $request)
    {
        // ذخیره فایل عکس اگر وجود داشته باشد
        $imagePath = null;
        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('products', 'public');
        }

        $category_id = 2;

        // ذخیره در دیتابیس (فرض بر اینکه ProductModel داریم)
        Product::create([
            'productName' => $request->productName,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'category_id' => $category_id,
            'thumbnail' => $imagePath,
        ]);

        return redirect()->route('products.add')->with('success', 'محصول با موفقیت اضافه شد.');
    }
}
