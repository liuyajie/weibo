<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|min:6|max:18',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:6|max:18',
        ]);
    }
}
