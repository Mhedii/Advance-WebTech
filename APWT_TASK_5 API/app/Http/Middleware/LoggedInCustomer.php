<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedInCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('user') || isset($_COOKIE['remember'])){
            return $next($request);
        }
        return redirect()->route('login');
        
    }
}
