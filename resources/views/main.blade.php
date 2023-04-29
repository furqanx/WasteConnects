@extends('layouts.app2')

@section('content')

    <!-- komponen panel kategori -->
    @include('components2.category')

    
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Rekomendasi</b></span>
    </div>


    <!-- komponen daftar postingan sampah-->
    @include('components2.product-list')
    
@endsection