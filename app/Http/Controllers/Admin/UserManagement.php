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

    public function banUser(Request $request)
    {
        $userId = $request->input('user_id');

        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'کاربر پیدا نشد.');
        }

        if ($user->isActive == 1) {
            $user->isActive = 0;
            $user->save();
            return redirect()->back()->with('success', 'کاربر غیرفعال شد.');
        } else {
            $user->isActive = 1;
            $user->save();
            return redirect()->back()->with('success', 'کاربر فعال شد.');
        }
    }
}
