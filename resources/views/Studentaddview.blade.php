@extends('layout.templates')
@section('title', 'Student')
@section('content')
<h1>ini adalah halaman Edit Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Danger!</strong> 
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                <li></li>
            </ul>
        </div>
    @endif

<form action="/Student" method="POST" enctype="multipart/form-data">
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

    <div class="mb-3 mt-3">
        <label for="email" class="form-label">PHOTO</label>
        <input type="file" class="form-control" id="image" placeholder="Enter email" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection