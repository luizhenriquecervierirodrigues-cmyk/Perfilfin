<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser()
    {
        $name = request()->get('name');
        $email = request()->get('email');
        $password = request()->get('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        return view('auth.login');
    }

    public function login()
    {
        $email    = request()->get('email');
        $password = request()->get('password');

        Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);

        return view('index');
    }

    public function logout()
    {
        Auth::logout();

        
        return redirect()->route('login');
    }
}