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
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd('Middleware is working!');
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);  // Proceed if admin
        }

        return redirect('/');  // Redirect if not admin
    }
}
