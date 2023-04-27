@extends('layouts.app')

@section('content')

    <!-- komponen panel kategori -->
    @include('components.category')

    
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Rekomendasi</b></span>
    </div>


    <!-- komponen daftar postingan sampah-->
    @include('components.post.list')
    
@endsection