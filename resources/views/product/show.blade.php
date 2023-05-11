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
    <div class="container mt-4 mb-2">
        <div class="card">
            <img src="{{ asset('storage/product_images/' . $product->image) }}" class="card-img-top" alt="Gambar Product">
            <div class="card-body">
                <h2 class="card-title">{{ $product->name }}</h2>
                <h4 class="card-subtitle mb-2 text-success">Rp. {{ $product->price }}</h4>
                <p class="card-text">Lokasi: {{ $product->address->province }}, {{ $product->address->city }},
                    {{ $product->address->district }}</p>
                <hr>
                <h4 class="card-subtitle text-muted">Deskripsi</h4>
                <p class="card-text mt-2">{{ $product->description }}</p>
            </div>
            <div class="card-footer bg-light">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('img/profile.png') }}" class="rounded-circle" width="50" height="50"
                            alt="Provider">
                    </div>
                    <div class="col">
                        <h5 class="mb-0">{{ $product->user->name }}</h5>
                        <small class="text-muted">
                            <a href="{{ route('user.products', $product->user->id) }}">Lihat Sampah Provider Ini</a>
                        </small>
                    </div>
                    <div class="col-auto">
                        <a href="https://wa.me/{{ $product->user->whatsapp }}" target="_blank"
                            class="btn btn-light text-success">
                            <span class="me-2">
                                <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp" width="30" height="30">
                            </span>
                            Hubungi Penjual
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <span class="text-muted"><b>Sampah dari Provider ini</b></span>
            <div class="d-flex flex-wrap align mx-5">
                @if (empty(json_decode($products)))
                    <div class="alert alert-warning mt-4" role="alert">
                        Maaf, tidak ada sampah selain ini yang ditemukan.
                    </div>
                @else
                    @foreach ($products as $product)
                        <div class="card mt-2 mb-2 size-item">
                            <a style="text-decoration: none" href="{{ route('product.show', ['id' => $product->id]) }}">
                                <img class="size-item" src="{{ asset('storage/product_images/' . $product->image) }}"
                                    alt="{{ $product->name }}">
    
                                <div class="card-body">
                                    <h6 class="card-title text-dark">
                                        <b>{{ $product->name }}</b>
                                    </h6>
                                    <p class="card-text text-success">Rp. {{ $product->price }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
