@extends('layout.templates')
@section('title', 'Student')
@section('content')
<h1>ini adalah halaman Teacher </h1>
<a href="" class="btn btn-primary"></a>
<table class="table-bordered table-hover table">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $list)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $list->name }}</td>
            <td><a href="Teacher/{{$list->id}}" class="btn btn-primary">action</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection