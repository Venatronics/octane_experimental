<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\AuthController;

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/me', [AuthController::class, 'me'])->middleware('auth:api');
});