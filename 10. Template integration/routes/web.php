<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('pages.user.index');
});

Route::get('/about', function () {
    // return view('welcome');
    return view('pages.user.about');
});
