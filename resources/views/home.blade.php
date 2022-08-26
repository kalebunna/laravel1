@extends('layout.templates')
@section('title', 'Home')
@section('content')
    <h1>ini halaman home</h1>
    <h2>selamat datang {{ $nama }} anda adalah {{ $role }}</h2>

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
