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
        $craeteUser = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2
        ]);

        if(!$craeteUser){
            return back()->with('failed','عملیات نا موفق ');
        }
        session()->flash('success', 'در حال ساخت حساب... - سپس به حساب خود وارد شوید');
        return redirect()->back();
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //return redirect()->intended('profile');
            //return back()->with('success','عملیات موفق - لطفا وارد شوید');

            session()->flash('success', 'خوش آمدید - در حال ورود ...');
            return redirect()->back();

        }

        session()->flash('error', 'اطلاعات ورود اشتباه است.');
        return redirect()->back();

        //return back()->with('error','عملیات نا موفق ');

//        return back()->withErrors([
//            'email' => 'اطلاعات وارد شده صحیح نیست.',
//        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
