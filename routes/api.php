<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/user', [AuthController::class, 'user']);
});

// Protected routes that require JWT authentication
Route::middleware('jwt.auth')->group(function () {
    // Admin routes that require authentication
    Route::get('/admin/dashboard', function () {
        return response()->json(['message' => 'Welcome to admin dashboard']);
    });
});
