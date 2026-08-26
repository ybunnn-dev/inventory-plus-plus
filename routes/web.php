<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\HistoryController;


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

    Route::get('/pos', [PosController::class, 'index'])
        ->name('pos');

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products');

    Route::get('/inventory', [InventoryController::class, 'index'])
        ->name('inventory');

    Route::get('/transactions', [HistoryController::class, 'index'])
        ->name('history');

    Route::get('/reports', [ReportsController::class, 'index'])
        ->name('report');


});

