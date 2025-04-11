<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm(){
        return view("form");
    }

    public function submitForm(Request $request){
        $request->validate([
            "username"=> "required|string",
            "email"=> "required|email",
            "password"=>"required|min:6",
            "country"=>"required",
            "gender"=>"required",
            "age"=> "required|integer",
            "dob"=>"required|date"
        ]);

        // print_r($request->all());
        return view("form",["form"=>$request->all()]);
    }
}
