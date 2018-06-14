<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class lecturerLoginMiddleware
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
        if(Auth::check()){
        $user = Auth::user();
        if($user->level == 2){
             return $next($request);
            }
         else return redirect('lecturer/login')->with('thongbao','information incorect!');
         }else
         return redirect('lecturer/login')->with('thongbao','information incorect!');
    }
}
