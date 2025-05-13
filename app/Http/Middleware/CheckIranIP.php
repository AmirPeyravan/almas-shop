<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIranIP
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();

        if (in_array($ip, ['127.0.0.1', '::1'])) {
            // در محیط توسعه هستیم (localhost)، فرض می‌کنیم ایران هستی
            return $next($request);
        }

        $location = geoip($ip);

        if ($location->iso_code !== 'IR') {
            abort(403, 'دسترسی فقط برای کاربران داخل ایران مجاز است.');
        }

        return $next($request);
    }
}

