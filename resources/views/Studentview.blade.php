@extends('layout.templates')
@section('title', 'Student')
@section('content')
    <h1>ini adalah halaman Student</h1>
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
                <th>Exatrakulikuler</th>
                <th>alamat</th>
                <th>jenis_kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->kelas_id }}</td>
                    <td>{{ $list->kelas->nama_kelas }}</td>
                    <td>{{ $list->address }}</td>
                    <td>
                        @foreach ($list->extraculiler as $e)
                            # {{ $e->name }}
                            <br>
                        @endforeach
                        {{-- {{ $list->extraculiler }} --}}
                    </td>
                    <td>{{ $list->jenis_kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
