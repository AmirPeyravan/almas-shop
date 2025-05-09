<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // ارسال ایمیل خوش‌آمدگویی
        //Mail::to($request->email)->send(new WelcomeMail());

        Mail::to($request->email)->send(new WelcomeMail($request->email));

        return back()->with('success', 'ایمیل خوش‌آمدگویی با موفقیت ارسال شد!');
    }
}
