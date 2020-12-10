<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if (Auth::user()->roles->name == 'super_admin') {
            return $next($request);
        } else {
            return redirect()->route('admin-dashboard')->with('warning', 'Sorry you don\'t have access to view the requested resource');
        }
    }
}
