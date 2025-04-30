<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customers extends Controller
{
    public function showCustomers()
    {
        return view('admin.customers');
    }

}
