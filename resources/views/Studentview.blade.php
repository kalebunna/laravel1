@extends('layout.templates')
@section('title', 'Student')
@section('content')
    <h1>ini adalah halaman Student</h1>
    <a href="Student-add" class="btn btn-primary"> TAMBAH DATA</a>

    @if (Session::has('status'))
            <div class="alert alert-success">
                <strong>Success!</strong>{{Session::get('message')}}
            </div>
    @endif
    {{-- <ol>
        @foreach ($data as $list)
            <li>
                {{ $list->name }} | {{ $list->address }} | {{ $list->jenis_kelamin }}
            </li>
        @endforeach
    </ol> --}}

    <div class="col">
        <div class="col-12 col-sm-5 col-md-3">

            <form action="" method="get" class="my-2">
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Keyword" name="keyword" aria-label="Username" aria-describedby="addon-wrapping">
                    <button class="input-group-text btn btn-primary" id="addon-wrapping">Search</button>
                </div>
            </form>
        </div>
    </div>
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
                    <td>
                        <a href="Student/{{$list->id}}" class="btn btn-primary badge badge-primary">Action</a>
                        <a href="Student-edit/{{$list->id}}" class="btn btn-primary badge badge-primary">Edit</a>
                        <a href="Student-delete/{{$list->id}}" class="btn btn-primary badge badge-primary">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-5">
        {{$data->withQueryString()->links()}}
    </div>
@endsection
