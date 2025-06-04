<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:4|max:16',
            'role' => 'required|string|in:manager,user'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect('/login');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('dashboard/index')->with('role', 'admin');

                case 'manager':
                    return redirect('dashboard/index')->with('role', 'manager');

                case 'user':
                    return redirect('user/index')->with('role', 'user');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login');


    }

    public function dashboard()
    {
        $user = Auth::user();
        if($user->role === 'admin' || $user->role === 'manager'){
            return view('dashoard.index', compact('user'));
        }

        if($user->role === 'user'){
            return view('user.index', compact('user'));
        }
    }
}
