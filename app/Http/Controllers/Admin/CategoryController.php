<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategories()
    {
        return view('admin.categories.categories');
    }
    
    public function addCategory()
    {
        return view('admin.categories.addCategories');
    }
}
