<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return auth()->check()
        ? redirect('/dashboard')
        : redirect('/login');
});

Route::post('/login-attempt', [AuthController::class, 'login']);

Route::get('/login', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});
