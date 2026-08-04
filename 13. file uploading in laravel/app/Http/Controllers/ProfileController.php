<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('index', compact('profiles'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'profile_image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $imagePath = $request->file('profile_image')->store('profile_image', 'public');

        Profile::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'profile_image' => $imagePath,
        ]);

        return redirect('/');
    }
}
