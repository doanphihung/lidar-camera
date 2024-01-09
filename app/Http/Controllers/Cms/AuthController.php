<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended(route('home'));
        }
        
        // Authentication failed
        return back()->with('error', __('messages.LG-001'));
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
