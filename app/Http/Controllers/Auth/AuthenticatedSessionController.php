<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('Admin.Auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $roles = Auth::user()->roles;
        $seperatedRoles = explode(",", $roles);

        $lastRole = end($seperatedRoles);
        if ($lastRole == 1) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }elseif($lastRole == 2){
            return redirect()->intended(RouteServiceProvider::EMPLOYEEE);
        }else{
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        //  return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
