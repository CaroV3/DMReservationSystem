<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 2)->get();
        return view('admin.user.index', compact('users'));

    }
    public function toggle(Request $request, User $user)
    {
        $user->status = $request->input('status');
        $user->save();

        return redirect()->route('admin.index');
    }
}
