<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class ApprovalMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->active) {
                auth()->logout();

                return redirect()->route('user-login')->with('message', trans('ท่านยังไม่ได้รับการอนุมัติจากผู้ดูแลระบบ จะมีอีเมล์แจ้งเมื่อท่านได้รับการอนุมัติแล้ว'));
            }
        }

        return $next($request);
    }
}
