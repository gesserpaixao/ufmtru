<?php

namespace App\Http\Middleware;
//use Illuminate\Auth\Middleware\Authenticate as Middleware; //add por @tiago

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheck
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
        
        if ($request->user()->isadmin ){
            return $next($request);
        }else{
        
            return redirect('/admin');;
        }
    }
}
