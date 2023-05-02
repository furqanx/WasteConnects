@extends('layouts.app2')

@section('content')
    <div class="container-fluid bg-success">
        <span class="text-light"><b>Tambah Sampah</b></span>
    </div>
    <div class="container mt-4">
        <h1>Tambah Produk Baru</h1>
        <hr>
        {{-- <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data"> --}}
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                maxlength="25" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="location">Lokasi</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                required>
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Kategori</label>
            <select class="form-control" id="category" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                    name="image" required>
                <label class="custom-file-label" for="image">Pilih Gambar</label>
            </div>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-2 mb-5">Tambahkan Produk</button>
        {{-- </form> --}}
    </div>
@endsection
