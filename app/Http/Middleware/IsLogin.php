<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLogin
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
        $login = session('isLogin');
        
        if ($login) {
             return $next($request);
        }
        return redirect()->back()->with('loi','Bạn Phải Đăng Nhập Mói Sử Dụng Được Chức Năng Này');
    }
}
