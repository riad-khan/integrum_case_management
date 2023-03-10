<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (Auth::user() &&  Auth::user()->roles == 1 ) {
        //     return $next($request);
        // }
        //     return redirect('/login');

        if(!isset(Auth::user()->roles)){
            return redirect('/login');
        }

        $roles = Auth::user()->roles;
        $seperatedRoles = explode(",",$roles);

        foreach($seperatedRoles as $item){
            if ($item == 1 || $item == 2 ||$item == 3) {
            return $next($request);
        }
            return redirect('/login');
        }
        
        
    }
}
