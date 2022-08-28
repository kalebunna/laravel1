@extends('layout.templates')
@section('title', 'Kelas')
@section('content')
    <h1>ini adalah halaman Kelas</h1>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama</th>
                <th>student</th>
                <th>teacher</th>
                <th>Action</th>
            </tr>
        </thead <tbody>
        @foreach ($data as $list)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $list->nama_kelas }}</td>
                <td>
                    @foreach ($list->student as $siswa)
                        # {{ $siswa->name }}
                        <br>
                    @endforeach
                </td>
                <td>
                    {{$list->kelasTeacher->name}}
                </td>
                <td>
                    <a href="Kelas/{{$list->id}}" class="btn btn-danger btn-sm">Detail</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
