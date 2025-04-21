<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });

Route::get("/", [ProductController::class,"index"]);
Route::get("/create", [ProductController::class,"create"]);
Route::post("/store", [ProductController::class,"store"]);
Route::get("/edit/{id}", [ProductController::class,"edit"]);
Route::put("/update/{id}", [ProductController::class,"update"]);
Route::get("/delete/{id}", [ProductController::class,"destroy"]);
