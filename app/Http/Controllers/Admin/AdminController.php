<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPanel()
    {
        return view('admin.master');
    }

    public function showShopInfo()
    {
        return view('admin.shopInfo');
    }

}
