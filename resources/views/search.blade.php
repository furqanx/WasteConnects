@extends('layouts.app2')

@section('content')
    <!-- komponen panel kategori -->
    @include('components2.category')

    <div class="container-fluid mt-3">
        @if (isset($query))
            <span class="text-muted">Menampilkan hasil untuk "{{ $query }}"</span>
        @endif
        @if (isset($category_current))
            <span class="text-muted">Menampilkan Sampah kategori "{{ $category_current->name }}" di kecamatan
                {{ $address_current->district }}</span>
        @endif

    </div>

    <!-- komponen daftar postingan sampah-->
    @include('components2.product-list')
@endsection
