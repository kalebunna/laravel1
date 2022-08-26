<?php

use App\Http\Controllers\ExtraculiculerController;
use App\Http\Controllers\Kelascontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\TeacherController;
use App\Models\extraculiculer;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "nama" => "syauqan wafiqi",
        "role" => "admin"
    ]);
});

Route::get('/tentang', function () {
    return '<h1>apaaja</h1>';
});

Route::get('/contact', function () {
    $profile = [
        "nama" => "syauqan wafiqi",
        "alamat" => "gapura timur"
    ];
    return view("contact", $profile);
});

Route::get("/get_data/{id}", function ($id) {
    return view("produk", ["id" => $id]);
});
Route::prefix("admin")->group(function () {
    Route::get("profile", function () {
        return "profile admin";
    });

    Route::get("about", function () {

        return "about admin";
    });
});

Route::get("/about", function () {
    return view("about");
});

Route::get('/Student', [Studentcontroller::class, 'index']);
Route::get('/Kelas', [Kelascontroller::class, 'index']);
Route::get('/extrakulikuler', [ExtraculiculerController::class, 'index']);
Route::get('/Teacher', [TeacherController::class, 'index']);
Route::get('/Student/{id}', [Studentcontroller::class, 'index']);
