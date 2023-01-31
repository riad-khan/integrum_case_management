<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isEmployee
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
        if(!isset(Auth::user()->roles)){
            return redirect('/login');
        }

        $roles = Auth::user()->roles;
        $seperatedRoles = explode(",",$roles);

        $lastRole = end($seperatedRoles);

        if($lastRole == 2 || $lastRole == 3){
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
