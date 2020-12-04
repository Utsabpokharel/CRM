<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Auth;

class RedirectifAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard ='user')
    {
        if (Auth::guard($guard)->check()) {
            return redirect(route('admin.index'));
        }
        return $next($request);
    }
}
