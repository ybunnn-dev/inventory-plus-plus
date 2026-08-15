<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\User;

class AuthController extends Controller
{
    //TBD: Rate limiter
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (! Auth::attempt($credentials)) {
                return back()->withErrors([
                    'email' => 'Invalid email or password',
                ]);
            }

            $request->session()->regenerate();

            return redirect()->route('dashboard');

        } catch (\Throwable $e) {

            \Log::error('Login exception', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()->withErrors([
                'system' => 'Something went wrong. Please try again later.',
            ]);
        }
    }

    public function index(){
        return Inertia::render('auth/login');
    }
}
