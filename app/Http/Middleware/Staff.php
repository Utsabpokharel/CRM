<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Staff
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
        if (Auth::user()->roleid == '3') {
            return $next($request);
        } else {
            return redirect()->route('admin.index')->with('error', 'Sorry you don\'t have access to view the requested resource');
        }
    }
}
