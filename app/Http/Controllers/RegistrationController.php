<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        // $attributes = $request->all();
        // $attributes['password'] = Hash::make($request->password);
        // User::create($attributes);
        // session()->flash('success', 'Thank you. You are now registered!');

        User::create($request->all());
        return redirect('/')->with('success', 'Thank you. You are now registered!');
    }
}