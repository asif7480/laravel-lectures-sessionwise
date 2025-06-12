<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/create', [CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/categories/edit/{id}', [CategoryController::class, 'update']);
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/edit/{id}', [ProductController::class, 'update']);
Route::get('/products/delete/{id}', [ProductController::class, 'delete']);