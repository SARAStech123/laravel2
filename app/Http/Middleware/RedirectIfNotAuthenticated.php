<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $path= $request->path();
        if(($path=="signin" || $path=="create") && (Session::get('user')))
        {
            return redirect('/');
        }
        /*else if($path!=="signin" && !Session::get('user') && $path!=="create" && !Session::get('user'))
        {
            return redirect('/');
        }*/
        return $next($request);
    }
}
