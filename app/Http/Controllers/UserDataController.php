<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        UserData::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Data Saved!');
    }
}
