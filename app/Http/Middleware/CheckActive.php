<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckActive
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isActive == 0) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'حساب شما غیرفعال شده است.');
        }

        return $next($request);
    }
}
