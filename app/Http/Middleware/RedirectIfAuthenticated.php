<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1) {
            return redirect()->route('admin/home');

        }elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 2){
            return redirect()->route('author/home');
        }elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 3){
            return redirect()->route('editor/home');
        }elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 4){
            return redirect()->route('moderator/home');
        }elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 5){
            return redirect()->route('advertiser/home');
        }elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 6){
            return redirect()->route('analyst/home');
        }else{
            return $next($request);
        }
    }
}
