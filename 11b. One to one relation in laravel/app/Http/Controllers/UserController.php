<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();
        return view('users.index', compact("users"));
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->only('name', 'email', 'password'));

        $user->profile()->create([
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect("/users");
    }

    public function edit($id)
    {
        $user = User::with('profile')->find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->only('name', 'email', 'password'));
        $user->profile->update([
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect('/users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
