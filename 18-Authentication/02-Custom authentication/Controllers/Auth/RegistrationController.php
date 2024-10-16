<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // registration page show method
    public function index() {
        if( auth()->guard()->check() ) {
            return redirect()->route('dashboard');
        }
        return view('auth.registration');
    }

    // registration method
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:4|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // auth()->attempt($request->only('email','password'));
        auth()->login($user);

        return redirect()->route('dashboard');
    }
}
