<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class VerificationMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->email_verified_at) {
                auth()->logout();

                return redirect()->route('user-login')->with('message', 'โปรดตรวจสอบอีเมล์เพื่อยืนยันอีเมล์');
            }
        }

        return $next($request);
    }
}
