<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/form", [FormController::class, "showForm"]);
Route::post("/form", [FormController::class,"submitForm"]);