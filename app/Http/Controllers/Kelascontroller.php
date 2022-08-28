<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class Kelascontroller extends Controller
{
    public function index()
    {
        // $data = Kelas::all();
        $data = Kelas::with(["student", "kelasTeacher"])->get();
        return view('kelasview', ["data" => $data]);
    }

    public function show($id)
    {
        $data = Kelas::with(['kelasTeacher', 'Student'])->findOrFail($id);
        return view(
            'Kelasshowview',
            ["data" => $data]
        );
    }
}
