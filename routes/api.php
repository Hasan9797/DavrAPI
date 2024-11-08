<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::post('login', [AuthController::class, 'login']);

    Route::prefix('admin')->group(function () {
        Route::middleware('auth:api')->group(function () {
            Route::apiResource('user', UserController::class);
            Route::get('logout', [AuthController::class, 'logout']);
            Route::get('refresh', [AuthController::class, 'refresh']);
        });
    });

    Route::middleware('auth:api')->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::get('refresh', [AuthController::class, 'refresh']);
        Route::get('logout', [AuthController::class, 'logout']);
    });


    Route::prefix('client')->group(function () {
        Route::middleware('auth:api')->group(function () {
            // Route::apiResource('orders', OrderController::class);
        });
    });
});
