<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // validate
        $attributes = request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|max:254',
            'password' => 'required|min:6|confirmed'

        ]);

        User::create(request()->all());
        // attempt to login user
        Auth::attempt($attributes);

        // redirect
        return redirect('/');
        //dd(request()->all());
        //return ;
    }
}
