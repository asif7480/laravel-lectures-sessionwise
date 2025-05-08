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
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            'role' => 'required|in:admin,manager,user'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role 
        ]);

        return redirect()->route('login');
    }

    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('/dashboard')->with('role', 'admin');
                case 'manager':
                    return redirect('/dashboard')->with('role', 'manager');
                case 'user':
                    return redirect('/dashboard')->with('role', 'user');
            }
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }
}
