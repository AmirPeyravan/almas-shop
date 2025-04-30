<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Setting extends Controller
{
    public function showSettings()
    {
        return view('admin.systemSetting');
    }
}
