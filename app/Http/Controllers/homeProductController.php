<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;

class homeProductController extends Controller
{
    public function Products()
    {
        // showAll
    }

    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.showProducts', compact('product'));
    }
}
