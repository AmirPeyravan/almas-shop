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

    public function search(Request $request)
    {
        $query = $request->input('query');

        $myProducts = Product::where('productName', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return view('frontend.search', compact('myProducts', 'query'));
    }
}
