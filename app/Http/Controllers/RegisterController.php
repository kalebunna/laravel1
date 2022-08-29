<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.Register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "email" => 'required|email:dns|unique:users',
            "password" => 'required|min:5',
            "name" => 'required',
            // "username" => ['required', 'min:3', 'unique:users']
        ]);

        dd($request->all());
    }

    public function sti(Request $req)
    {
        $data = $req->validate([
            "email" => 'required|email|uniqe',
            "password" => 'DDADSFASDF',
            "ASDFASD" => "{ASDFASDF",
        ]);

        foreach ($data as $key) {
            return $data;
        }
    }
}
