<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm(){
        return view("register");
    }

    public function register(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6|confirmed"
        ]);
        // $user = new User();

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
         ]);

         Auth::login($user);
         return redirect("/dashboard");
    }

    public function loginForm(){
        return view("login");
    }

    public function login(Request $request){
        $credentials = $request->only("email","password");

        if(Auth::attempt($credentials)){
            return redirect("/dashboard");
        }

        return back()->withErrors([
            "email" => "Invalid credentials"
        ]);
    }

    public function dashboard(){
        return view("dashboard");
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect("/login");
    }
}
