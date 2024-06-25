<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

//No me funciono el register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Se deja por fuera el las rutas de tasks para que puedan ser verificadas
Route::apiResource('tasks', TaskController::class);
Route::middleware('auth:api')->group(function () {
});




