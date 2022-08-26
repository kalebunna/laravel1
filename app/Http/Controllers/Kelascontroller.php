<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class Kelascontroller extends Controller
{
    public function index()
    {
        $data = Kelas::all();
        $data = Kelas::with("student")->get();
        return view('kelasview', ["data" => $data]);
    }
}
