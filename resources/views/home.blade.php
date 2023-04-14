@extends('layouts.main')

@section('content')

    <!-- komponen untuk navbar -->
    @include('partials.navbar')
    

    <!-- komponen untuk panel kategori -->
    @include('partials.categorypanel')

    
    
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Rekomendasi</b></span>
    </div>


    <!-- komponen untuk daftar postingan sampah-->
    @include('partials.productlist')
    
@endsection