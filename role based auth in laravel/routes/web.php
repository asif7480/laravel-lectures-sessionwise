<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// public routes
// Route::middleware("guest")->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get("/register", [AuthController::class, "registerForm"])->name("register");
    Route::post("/register", [AuthController::class,"register"]);
    
    Route::get("/login", [AuthController::class, "loginForm"])->name("login");
    Route::post("/login", [AuthController::class,"login"]);
// });

// protected routes
// Route::middleware("admin")->group(function(){
    Route::get("/logout", [AuthController::class,"logout"])->name("logout");

    Route::get("/dashboard", [AuthController::class,"dashboard"])->name("dashboard");
// });

