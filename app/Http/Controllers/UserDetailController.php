<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    // READ
    public function index()
    {
        $users = UserDetail::all();
        return view('users.index', compact('users'));
    }

    // CREATE FORM
    public function create()
    {
        return view('users.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        UserDetail::create($request->all());

        return redirect()->route('users.index')
                         ->with('success','User added successfully');
    }

    // EDIT FORM
    public function edit($id)
    {
        $user = UserDetail::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $user = UserDetail::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index')
                         ->with('success','User updated successfully');
    }

    // DELETE
    public function destroy($id)
    {
        UserDetail::findOrFail($id)->delete();

        return redirect()->route('users.index')
                         ->with('success','User deleted successfully');
    }
}
