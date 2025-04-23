<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/register", [AuthController::class, "registerForm"]);
Route::post("/register", [AuthController::class,"register"]);

Route::get("/login", [AuthController::class, "loginForm"]);
Route::post("/login", [AuthController::class,"login"]);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout']);
