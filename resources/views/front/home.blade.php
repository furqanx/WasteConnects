@extends('front.layout.main')

@section('content')

    <!-- blading template untuk navbar -->
    @include('front.partials.navbar')
    


    @include('front.partials.kategoripanel')


          
    <!-- rekomendasi postingan sampah -->
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Rekomendasi</b></span>
    </div>
    <!-- kontainer rekomendasi postingan sampah-->
    @include('front.partials.listsampah')
    
@endsection