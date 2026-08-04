<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProfileController::class, 'index']);

Route::get('/create', [ProfileController::class, 'create']);

Route::post('/store', [ProfileController::class, 'store']);
