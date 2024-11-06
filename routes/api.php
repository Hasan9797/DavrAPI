<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::middleware('auth:api')->group(function(){
        Route::apiResource('users', UserController::class);
    });
});


Route::prefix('client')->group(function(){
    Route::middleware('auth:api')->group(function(){
        // Route::apiResource('orders', OrderController::class);
    });
});
