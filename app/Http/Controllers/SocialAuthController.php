<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    // ریدایرکت به گوگل
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // دریافت اطلاعات کاربر از گوگل
        $googleUser = Socialite::driver('google')->stateless()->user();
    
        // لینک آواتار
        $avatarUrl = $googleUser->getAvatar();
    
        // دریافت محتویات تصویر
        $avatarContents = file_get_contents($avatarUrl);
    
        // نام فایل آواتار (می‌تونی تغییرش بدی)
        $avatarName = 'avatars/' . $googleUser->getId() . '.jpg';
    
        // ذخیره آواتار در پوشه 'avatars'
        Storage::disk('public')->put($avatarName, $avatarContents);
    
        // ذخیره یا بروزرسانی اطلاعات کاربر
        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'firstName' => $googleUser->user['given_name'] ?? null,
                'lastName' => $googleUser->user['family_name'] ?? null,
                'username' => Str::slug($googleUser->user['given_name'] . '-' . Str::random(5)),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt(Str::random(16)),
                'google_id' => $googleUser->getId(),
                'avatar' => $avatarName,
                'role_id' => 2
           ]
        );
    
        // ورود کاربر
        Auth::login($user);
    
        // هدایت به داشبورد
        return redirect('/profile');
    }
    
}
