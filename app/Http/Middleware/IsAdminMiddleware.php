<?php

namespace App\Http\Middleware;

use Auth;
use Closure;


class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
        /*dd(Auth::user());*/
        if (Auth::user()->is_admin) {
            return $next($request);
        } else

        return redirect('/')->with('Error','Compte non Administrateur');
    }
}
