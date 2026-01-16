<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate
        $attributes = request()->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::default(), 'confirmed'],
        ]);
        // create the user
        $user = User::create($attributes);
        Client::create([
            'user_id' => $user->id,
            'name' => $attributes['name'],
        ]);

        // login
        Auth::login($user);

        // redirect
        return redirect('/services');
    }
}
