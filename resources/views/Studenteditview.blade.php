
@extends('layout.templates')
@section('title', 'Student')
@section('content')

<h1>ini adalah halaman Edit Student</h1>
<form action="/Student/{{$data->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Enter email" name="name"  value="{{$data->name}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Enter email" name="jenis_kelamin" value="{{$data->jenis_kelamin}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="address" placeholder="Enter email" name="address" value="{{$data->address}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">NIS</label>
        <input type="Number" class="form-control" id="nis" placeholder="Enter email" name="nis" value="{{$data->nis}}">
    </div>

    <div class="mb-3 mt-3">
        <label for="email" class="form-label ">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-control">
            <option value="{{$data->kelas_id}}">{{$data->Kelas->nama_kelas}}</option>
            @foreach ($kelas as $item)
            <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection