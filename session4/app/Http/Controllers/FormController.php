<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getData(){
        return view('form');
    }

    function postData(Request $request){
        $request->validate([
            'name' => 'required|max:4',
            'email' => 'required|email',
            'password' => 'required ',
            'password_confirmation' => 'required|confirmed',
        ]);

        echo "<pre>";
            print_r($request->input());
        echo "</pre>";
    }
}
