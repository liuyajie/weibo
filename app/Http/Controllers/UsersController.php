<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name'     => 'required|min:1|max:10',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:6|max:18',
        ]);
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        session()->flash('success','欢迎你~');
        return redirect()->route('users.show', [$user]);
    }
}
