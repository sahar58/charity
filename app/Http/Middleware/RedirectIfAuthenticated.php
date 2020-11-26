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
        if ( $guard=='admin'&& Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::ADMIN);
        }
        else if($guard=='user'&& Auth::guard($guard)->check()){
            return redirect(RouteServiceProvider::HOME);
        }
        else if($guard=='charity'&& Auth::guard($guard)->check()){
            return redirect(RouteServiceProvider::CHARITY);
        }
        else if($guard=='pCase'&& Auth::guard($guard)->check()){
            return redirect(RouteServiceProvider::PCASE);
        }

        return $next($request);
    }
}
