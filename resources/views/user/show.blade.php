@extends('layouts.app2')

@section('content')

    Id      : {{ $user->id }}
    <br>
    Nama    : {{ $user->name }}
    <br>
    Email   : {{ $user->email }}
    <br>
    <a href="{{ route('user.products', ['id' => $user->id]) }}">Product Akun Ini</a>
@endsection