<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 1. بررسی داده‌های ارسالی
        dd($request->all()); // چاپ داده‌های فرم برای دیباگ
    
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'required|accepted',
        ]);
    
        // 2. بررسی خطاهای اعتبارسنجی
        if ($validator->fails()) {
            dd($validator->errors()); // چاپ خطاها
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            // 3. بررسی وجود نقش
            $role = \App\Models\Role::where('roleStatus', 'user')->first();
            if (!$role) {
                dd('No role found with roleStatus=user'); // اگر نقش پیدا نشد
            }
    
            // 4. تلاش برای ایجاد کاربر
            dd('About to create user'); // قبل از ایجاد کاربر
            User::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
            ]);
    
            return redirect()->route('login')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // 5. چاپ خطا برای دیباگ
            dd('Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Registration failed: ' . $e->getMessage())->withInput();
        }
    }
    

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('profile');
        }

        return back()->withErrors([
            'email' => 'اطلاعات وارد شده صحیح نیست.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
