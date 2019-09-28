<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/');
        } else {
            if (Auth::user()->role_id >= 3) {
                Auth::logout();
                return redirect()->back()->with([
                    'errors' => 'Bạn không có quyền truy cập vào trang này!',
                ]);
            }
        }
        return $next($request);
    }
}
