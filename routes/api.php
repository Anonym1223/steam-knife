<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KnifeController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('knives',KnifeController::class);
    Route::get("/buy/{id}",[KnifeController::class,'buy']);
    Route::get("/logout", function (Request $request) {
        // Удаляем текущий токен пользователя
        $request->user()->currentAccessToken()->delete();
    
        return response()->json(['message' => 'Вы успешно вышли из системы']);
    });
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/knives', [KnifeController::class, 'index']);
Route::get('/knife/{id}', [KnifeController::class, 'show']);