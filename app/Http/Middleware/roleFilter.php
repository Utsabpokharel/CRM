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
        if (!(Auth::user()->roleid== '1' || Auth::user()->roleid== '2' || Auth::user()->roleid== '3' || Auth::user()->roleid== '4' || Auth::user()->roleid== '5')) {
            return redirect()->route('admin.index')->with('error', 'Sorry You are not authorized user.');
        }

        if ((Auth::user()->roleid== '1' || Auth::user()->roleid== '2' || Auth::user()->roleid== '3' || Auth::user()->roleid== '4' || Auth::user()->roleid== '5')) {
            return $next($request);
        } else {
            return redirect()->route('admin.index')->with('error', 'Sorry You are not authorized user.');
        }
    }
}
