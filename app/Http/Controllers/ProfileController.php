<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('home');

    }
}
