@extends('layout.templates')
@section('title', 'Student')
@section('content')
    <h1>ini adalah halaman Student</h1>
    <a href="Student-add" class="btn btn-primary"> TAMBAH DATA</a>
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
                <th>no</th>
                <th>nama</th>
                <th>kelas</th>
                <th>nama kelas</th>
                <th>Wali Kelas</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->kelas_id }}</td>
                    <td>{{ $list->kelas->nama_kelas }}</td>
                    <td>{{ $list->kelas->kelasTeacher->name }}</td>
                    <td><a href="Student/{{$list->id}}" class="btn btn-primary badge badge-primary">Action</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
