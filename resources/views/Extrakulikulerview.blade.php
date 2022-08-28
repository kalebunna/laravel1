@extends('layout.templates')
@section('title', 'Kelas')
@section('content')
    <h1>ini adalah halaman Extra Kulikuler</h1>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama</th>
                <th>Student</th>
                <th>action</th>
            </tr>
        </thead <tbody>
        @foreach ($data as $list)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $list->name }}</td>
                <td>
                    @foreach ($list->student as $st)
                        {{ $st->name }}
                        <br>
                    @endforeach
                </td>
                <td>
                    <a href="Extrakulikuler/{{$list->id}}" class="btn btn-danger btn-sm">Detail</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
