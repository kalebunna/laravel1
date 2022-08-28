<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
  public function index(Request $request)
  {

    $keyword = $request->keyword;
    // dd($keyword);s
    // get data dengan relasi dengan lazy loading
    // $data = Student::all();
    // get data dengan relasi dengan cara eiger loading ini cara yang sangat disarankan


    $data = Student::with(["kelas", "extraculiler"])->where('name', 'Like', '%' . $keyword . '%')->orWhere('jenis_kelamin', 'Like', '%' . $keyword . '%')
      ->orWhereHas('Kelas', function ($query) use ($keyword) {
        $query->where('nama_kelas', 'LIKE', '%' . $keyword . '%');
      })->paginate(15);
    // $data = Student::with(["kelas", "extraculiler"])->get();
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

  public function store(StudentCreateRequest $request)
  {


    $student = new Student();
    // $student->name = $request->name;
    // $student->nis = $request->nis;
    // $student->jenis_kelamin = $request->jenis_kelamin;
    // $student->kelas_id = $request->kelas_id;
    // $student->address = $request->address;
    // $student->save();

    $student->create($request->all());
    if ($student) {
      session()->flash('status', "success");
      session()->flash("message", "Ber Hasil Menambah Data Baru !");
    }
    return redirect('/Student');
  }

  public function edit(Request $request, $id)
  {
    $student = Student::with('Kelas')->findOrFail($id);
    $kelas = Kelas::where('id', '!=', $student->kelas_id)->get();
    return view(
      'Studenteditview',
      [
        "data" => $student,
        "kelas" => $kelas,
      ]
    );
  }

  public function update(Request $request, $id)
  {
    // dd($request);
    $student = Student::findOrFail($id);
    // dd($student);
    $student->update($request->all());
    return redirect('/Student');
    // dd($request->all());
  }

  public function destroy($id)
  {
    $student = Student::findOrFail($id)->delete();
    return redirect('/Student');
  }
}
