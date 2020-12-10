<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class roleFilter
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
        if (!(Auth::user()->roles->name == 'super_admin' || Auth::user()->roles->name == 'admin' || Auth::user()->roles->name == 'staff' || Auth::user()->roles->name == 'customer' || Auth::user()->roles->name == 'vendor')) {
            return redirect()->route('login')->with('error', 'Sorry You are not authorized user.');
        }

        if ((Auth::user()->roles->name == 'super_admin' || Auth::user()->roles->name == 'admin' || Auth::user()->roles->name == 'staff' || Auth::user()->roles->name == 'customer' || Auth::user()->roles->name == 'vendor')) {
            return $next($request);
        } else {
            return redirect()->route('login')->with('error', 'Sorry You are not authorized user.');
        }
    }
}
