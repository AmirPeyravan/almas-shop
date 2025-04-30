<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserManagement extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        return view('admin.userManagement', compact('users'));
    }
}
