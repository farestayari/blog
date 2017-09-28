<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Auth::user()->admin) 
        {
            Session::flash('info','you do not have the permission to perform this action ');

            return redirect()->back();
        }

        return $next($request);
    }
}
