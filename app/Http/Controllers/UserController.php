<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function ShowRegisterForm()
    {
        return view('register');
    }

    public function ShowLoginForm()
    {
        return view('login');
    }

    public function register(UserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('login')->with('success', 'Utilisateur enregistrée !');
    }

    public function login(Request $request)
    {
        $request->validate(["email" => "required", "password" => "required"]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('appartements.index')->with('success', 'Welcome Back ' . Auth::user()->name . ' !');
        } else {
            return redirect()->route('login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/appartements')->with('success', 'You have been logged out!');
    }
/*
 * Faire les message d'erreur pour les page
 * - message pour les */
}
