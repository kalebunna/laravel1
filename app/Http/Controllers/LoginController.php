<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => 'required|email:dns',
            "password" => 'required'
        ]);

        // dd($request->all());

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            redirect()->intended('/Kelas');
        }

        return back()->with('err', 'Login Error');
    }
}
