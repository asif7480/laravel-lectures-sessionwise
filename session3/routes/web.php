<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic/{name?}', function($name = null){
    return view('basic', ['name' => $name]);
});


Route::get('/conditional/{value?}', function($value = null){
    return view('conditional', ['value' => $value]);
});

Route::get('/loops', function(){
    return view('loops');
});

Route::get('/main', function(){
    return view('layouts.main');
});

Route::get('/page1', function(){
    return view('page1');
});

Route::get('/page2', function(){
    return view('page2');
});