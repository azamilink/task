<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{


    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Cara 1:
        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'You are now login!');
        //     }
        // }

        // Cara 2:
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect('/')->with('success', 'You are now login!');
        // }

        // Cara 3:
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/tasks')->with('success', 'You are now login!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provide credential does not match our record'
        ]);
    }
}
