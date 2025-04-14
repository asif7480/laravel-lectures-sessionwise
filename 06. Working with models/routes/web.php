<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products", [ProductController::class,"index"]);
Route::get("/addProduct", [ProductController::class,"create"]);
Route::post("/addProduct", [ProductController::class,"store"]);