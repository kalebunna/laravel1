<h1>ini adalah halaman view</h1>
@extends('layout.templates')
@section('title', 'Student')
@section('content')
<h1>ini adalah halaman Detail Student</h1>
{{-- <ol>
    @foreach ($data as $list)
    <li>
        {{ $list->name }} | {{ $list->address }} | {{ $list->jenis_kelamin }}
    </li>
    @endforeach
</ol> --}}
<table class="table-bordered table-hover table">
    <thead>
        <tr>
            <th>nama</th>
            <th>kelas</th>
            <th>nama kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->kelas_id }}</td>
            <td>{{ $data->kelas->nama_kelas }}</td>
        </tr>
    </tbody>
</table>

<h1>Extra Kulikuler</h1>
@foreach ($data->extraculiler as $data)
    <li>
        <ol>{{$data->name}}</ol>
    </li>
@endforeach
@endsection