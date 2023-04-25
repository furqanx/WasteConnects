@extends('layouts.main')

@section('content')

    <!-- komponen untuk navbar -->
    @include('partials.navbar')

    <!-- komponen untuk panel kategori -->
    @include('partials._categorypanel')
    
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Rekomendasi</b></span>
    </div>

    <!-- komponen untuk postingan sampah-->
    @include('partials._productlist')
    
@endsection