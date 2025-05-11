<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Services\ElasticService;

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
        $query = $request->input('q');
        if (!$query) {
            return redirect()->back();
        }

        $elastic = new ElasticService();
        $results = $elastic->searchProducts($query);

        // استخراج داده‌ها از نتایج
        $showProducts = collect($results['hits']['hits'])->pluck('_source');

        // ارسال به ویو
        //dd($products);  // اینجا برای اطمینان بررسی کنید

        return view('frontend.search', compact('showProducts'));
    }


}
