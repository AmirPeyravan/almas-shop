<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    // ریدایرکت به گوگل
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // دریافت اطلاعات بعد از لاگین موفق
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'firstName' => $googleUser->user['given_name'] ?? null,
                'lastName' => $googleUser->user['family_name'] ?? null,
                'username' => Str::slug($googleUser->user['given_name'] . '-' . Str::random(5)),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt(Str::random(16)),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'role_id' => 2
            ]
        );

        auth()->login($user);

        return redirect('/profile'); // مسیر دلخواه بعد از لاگین
    }
}
