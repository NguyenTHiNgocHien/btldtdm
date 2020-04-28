<?php

namespace App\Http\Middleware;

use Closure;
use DB;

use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(Auth::guard('nhanvien')->check());
        if(Auth::guard('nhanvien')->check())
        {
            
            //ủa là sao
            //đăng nhập rồi k cho đăng nhập nữa
            //hỏi m khúc đó đó nó bắt đăng nhập quài
            //hay để cái middleware cho toatn route
            return $next($request);
        }
        else
        {
            return redirect()->route('getDangnhap');
        }

        // if(Auth::guard('khachhang')->check())
        // {
            
        //     //ủa là sao
        //     //đăng nhập rồi k cho đăng nhập nữa
        //     //hỏi m khúc đó đó nó bắt đăng nhập quài
        //     //hay để cái middleware cho toatn route
        //     return $next($request);
        // }
        // else
        // {
        //     return redirect()->route('dangnhapkhachhang');
        // }
    }
}
