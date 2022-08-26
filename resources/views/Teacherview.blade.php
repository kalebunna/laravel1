@extends('layout.templates')
@section('title', 'Student')
@section('content')
<h1>ini adalah halaman Teacher</h1>
<table class="table-bordered table-hover table">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $list)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $list->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection