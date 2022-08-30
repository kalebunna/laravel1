@extends('layout.templates')
@section('title', 'Home')
@section('content')
    <h1>ini halaman home</h1>
    {{-- {{ Auth::user() }} --}}
    @if (Auth::user())
        <h2>selamat datang {{ Auth::user()->name }} anda adalah {{ Auth::user()->role->name }}</h2>
    @else
        <h2>Anda Belum Login</h2>
    @endif

    {{-- @if ($role == 'admin')
            <a href="">kehalaman admin</a>
        @elseif ($role=="staff")
            <a href="">kehalaman staff</a>
        @else
            <a href="">sembarang</a>
        @endif --}}

    {{-- @switch($role)
            @case("admin")
                    <a href="">kehalaman admin</a>
                @break
            @case("staff")
                  <a href="">kehalaman staff</a>
            @break
            @default
                 <a href="">sembarang</a>
                 @break
        @endswitch --}}

    @for ($i = 1; $i < 10; $i++)
        <h4>syauqan wafiqi</h4>
    @endfor
@endsection
