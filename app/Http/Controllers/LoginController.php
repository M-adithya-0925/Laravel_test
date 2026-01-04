<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // READ (List users)
    public function index()
    {
        $users = Login::all();
        return view('users.index', compact('users'));
    }

    // CREATE (Show form)
    public function create()
    {
        return view('users.create');
    }

    // STORE (Save data)
    public function store(Request $request)
    {
        Login::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users')->with('success', 'User created');
    }

    // EDIT (Show edit form)
    public function edit($id)
    {
        $user = Login::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $user = Login::findOrFail($id);
        $user->update([
            'email' => $request->email,
        ]);

        return redirect('/users')->with('success', 'User updated');
    }

    // DELETE
    public function destroy($id)
    {
        Login::destroy($id);
        return redirect('/users')->with('success', 'User deleted');
    }
}
