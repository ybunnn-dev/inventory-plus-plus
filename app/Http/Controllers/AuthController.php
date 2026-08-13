<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthController extends Controller
{
    //TBD: Rate limiter
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Log::info('Login attempt', [
            'email' => $credentials['email'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        Log::info('User lookup', [
            'found' => $user !== null,
            'user_id' => $user?->id,
            'stored_hash' => $user?->password,
        ]);

        if (! Auth::attempt($credentials)) {
            Log::warning('Auth attempt failed', [
                'email' => $credentials['email'],
            ]);

            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $request->session()->regenerate();

        Log::info('Login successful', [
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'message' => 'Login successful'
        ]);
    }
}
