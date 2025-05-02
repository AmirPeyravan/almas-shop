<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function showCategoriesMaster()
    {
        $categories = Category::all();
        return view('frontend.categories')->with('categories', $categories);
    }

    public function addCategory()
    {
        return view('admin.categories.addCategories');
    }

    public function createCategory(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.create')->with('success', 'دسته‌بندی با موفقیت اضافه شد.');
    }
}
