<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/home", function(){
    return view("home");
});

Route::get("/about", function(){
    return view("about");
});

Route::get("/contact", function(){
    return view("contact");
});

Route::get("/profile", function(){
    return view("profile"); 
});

Route::get("/profile/{name?}", function(string $name = ""){
    return view("profile", ["name"=>$name]);
    // return $name;
});

Route::get("/users/posts", function(){
    return "Post by users";
});
