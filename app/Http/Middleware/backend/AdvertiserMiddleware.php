<?php

namespace App\Http\Middleware\backend;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdvertiserMiddleware
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
        if (Auth::check() && Auth::user()->role->id == 5){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
