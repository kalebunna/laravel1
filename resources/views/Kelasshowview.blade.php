
@extends('layout.templates')
@section('title', 'kelas')
@section('content')
<h1>ini adalah halaman kelas {{$data->nama_kelas}}</h1>
<a href="" class="btn btn-primary"></a>
<table class="table-bordered table-hover table">
    <thead>
        <tr>
            <th>nama kelas</th>
            <th>Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->nama_kelas}}</td>
            <td>{{$data->kelasTeacher->name}}</td>
        </tr>
    </tbody>
</table>

<h1>Daftar Siswa</h1>
@foreach ($data->Student as $item)
    {{$item->name}}
    <br>
@endforeach
@endsection