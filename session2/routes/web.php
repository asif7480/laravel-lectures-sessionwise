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
// home route
Route::get('/', function () {
    return view('welcome');
});

// basic routing
Route::get('/welcome', function(){
    return view('welcome');
});

// calling route in another way
// Route::view('/welcome', 'welcome');

// basic route
Route::get('/admin', function(){
    return view('admin');
});

// route with parameter
Route::get('/user/{user}', function($user){
    return view('user', ['user'=> $user]);
})->whereAlphaNumeric('user');



// route with optional parameter

Route::get('/user/{user?}', function($user = null){
    if($user){
        return view('user', ['user'=> $user]);
        // return "This is a route with something";
    }else{
        // return "This is a route with nothing";
    return view('user', ['user'=> $user]);
    }
});

// nested route
Route::get('/user/admin/welcome', function(){
    return view('user');
});

// fallback route is used for display customize 404 not found page
Route::fallback( function(){
    return "This route is not available";
});


Route::get('/app/example', function(){
    return view('example');
});