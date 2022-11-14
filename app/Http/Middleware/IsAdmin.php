<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        
        $role = session('roleUser');
        $login = session('isLogin');
        if ($login && $role == 2) {
             return $next($request);
        }
        return redirect('HomeAdmin')->with('error','Bạn không có quyền truy cập chức năng này.');
    }
}
