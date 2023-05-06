@extends('layouts.app2')

@section('content')
    <!-- Tampilkan div jika produk dimiliki oleh akun yang sedang diautentikasi -->
    @if (Auth::check() && $product->user_id === Auth::user()->id)
        <div>
            <div class="alert alert-success" role="alert">
                Ini adalah Sampah anda! Klik <a href="{{ route('product.edit', ['id' => $product->id]) }}">edit</a> untuk
                melakukan modifikasi
            </div>
        </div>
    @endif
    address_current = {{ $address_current }}
    <br>
    Id : {{ $product->id }}
    <br>
    Name : {{ $product->name }}
    <br>
    Description : {{ $product->description }}
    <br>
    Price : {{ $product->price }}
    <br>
    Address : {{ $product->address->district }}
    <br>
    Category : {{ $product->category->name }}
    <br>
    User Product Ini :
    <a href="{{ route('user.show', ['id' => $product->user->id]) }}">{{ $product->user->name }}</a>
@endsection
