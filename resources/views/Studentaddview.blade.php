@extends('layout.templates')
@section('title', 'Student')
@section('content')
<h1>ini adalah halaman Tambah Student</h1>
<form action="/Student" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Enter email" name="name">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Enter email" name="jenis_kelamin">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="address" placeholder="Enter email" name="address">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">NIS</label>
        <input type="Number" class="form-control" id="nis" placeholder="Enter email" name="nis">
    </div>

    
    <div class="mb-3 mt-3">
        <label for="email" class="form-label ">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-control">
            @foreach ($data as $item)
            <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection