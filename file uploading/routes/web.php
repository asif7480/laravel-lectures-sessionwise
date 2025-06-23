<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [FileUploadController::class, 'form']);
Route::post('/upload', [FileUploadController::class, 'upload']);
