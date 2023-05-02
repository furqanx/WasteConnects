@extends('layouts.app2')

@section('content')
    <!-- komponen panel kategori -->
    @include('components2.category')

    @if (Route::currentRouteName() == 'products')
        <div class="container-fluid bg-success">
            <span class="text-light"><b>Rekomendasi</b></span>
        </div>
    @endif

    @if (Route::currentRouteName() == 'products.searchByCategory')
        <div class="container-fluid bg-success">
            <span class="text-light"><b>Cari Berdasarkan Kategori</b></span>
        </div>
    @endif


    <!-- komponen daftar postingan sampah-->
    @include('components2.product-list')
@endsection
