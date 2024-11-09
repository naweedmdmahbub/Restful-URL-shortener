<?php

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function () {
    // Logout route
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
