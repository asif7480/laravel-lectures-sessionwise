<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get("/profile/{name}", function(string $name){
    return view("profile", ["name"=>$name]);
});

Route::get("/products", function(){
    $products = ["laptop", "mouse", "speaker", "mobile"];
    return view("products", compact("products"));
});

// group routes
Route::prefix("admin")->group(function(){
    Route::get("/allUsers", function(){ return view("allUsers"); });
    Route::get("/addUsers", function(){ return view("addUsers"); });
    Route::get("/updateUsers", function(){ return view("updateUsers"); });
});