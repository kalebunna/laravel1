@extends('layout.templates')
@section('title', 'kelas')
@section('content')
<a href="" class="btn btn-primary">Tambah Data</a>
{{-- <h1>ini adalah halaman kelas {{$data->nama_kelas}}</h1> --}}
<table class="table-bordered table-hover table">
    <thead>
        <tr>
            <th>Nama</th>
            {{-- <th>Nama Kelas</th> --}}
            {{-- <th>Extra Kulikuler</th> --}}
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$data->name}}</th>
            {{-- <th>{{$data->class->nama_e}}</th> --}}
        </tr>
    </tbody>
</table>

<h1>Daftar Siswa</h1>
<ol>
    @foreach ($data->student as $item)
        <li>{{$item->name}}</li>
    @endforeach
</ol>
    {{-- @foreach ($data->Student as $item)
        {{$item->name}}
        <br>
@endforeach --}}
@endsection