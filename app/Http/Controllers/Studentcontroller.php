<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
  public function index()
  {
    // get data dengan relasi dengan lazy loading
    // $data = Student::all();
    // get data dengan relasi dengan cara eiger loading ini cara yang sangat disarankan
    $data = Student::with(["kelas", "extraculiler"])->get();
    return view('Studentview', ["data" => $data]);


    // contoh menggunakan eluquent
    // Student::create([
    //   "name" => "E Syauqan Wafiqi",
    //   "jenis_kelamin" => "L",
    //   "nis" => "123123",
    //   "address" => "gapura timur",
    //   "kelas_id" => 1
    // ]);

    // Student::find(37)->update([
    //   "name" => "asssalamu'alaikum",
    //   "jenis_kelamin" => "P"
    // ]);

    // Student::find(37)->delete();
    // contoh meng37gunakan eluquent


    //belajar collection
    // 1. belajar rata rata2
    // $nilai = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // dd(collect($nilai)->avg());

    // 2. mencari nilai dalam sebuah array

    // dd(collect($nilai)->contains(11));


    // mencari data yang nilainya lebih dari 7
    // dd(collect($nilai)->filter(function ($value) {
    //   return $value > 7;
    // })->all());

    // mengkalikan 2 didalam variable nilai

    // dd(collect($nilai)->map(function ($value) {
    //   return $value * (2.25);
    // }));
  }

  public function show($id)
  {
    $data = Student::with(['Kelas.kelasTeacher', 'extraculiler'])->findOrFail($id);
    return view('Studentshowview', [
      "data" => $data
    ]);
  }

  public function create()
  {
    $data = Kelas::all();
    return view(
      'Studentaddview',
      [
        "data" => $data
      ]
    );
  }

  public function store(Request $request)
  {

    $student = new Student();
    // $student->name = $request->name;
    // $student->nis = $request->nis;
    // $student->jenis_kelamin = $request->jenis_kelamin;
    // $student->kelas_id = $request->kelas_id;
    // $student->address = $request->address;
    // $student->save();

    $student->create($request->all());
    return redirect('/Student');
  }

  public function edit()
  {
    $data = Kelas::all();
    return view(
      'Studentaddview',
      [
        "data" => $data
      ]
    );
  }
}
