<?php

namespace App\Http\Controllers;

use App\Models\User;
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


        $data["password"] = bcrypt($data["password"]);
        // dd($request->all());
        User::create($data);

        // return redirect('/login');
    }
}
