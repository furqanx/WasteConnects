@extends('layouts.app2')

@section('content')
    Id          : {{ $product->id }}
    <br>
    Name        : {{ $product->name }}
    <br>
    Description : {{ $product->description }}
    <br>
    Price       : {{ $product->price }}
    <br>
    Location    : {{ $product->location }}
    <br>
    User Product Ini     : 
    <a href="{{ route('user.show', ['id' => $product->user->id]) }}">{{ $product->user->name }}</a>
@endsection