@extends('layouts.app2')

@section('content')
<div class="container">    
    <div class="col-lg-8 mx-auto my-5">	

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="imageFormInput">Gambar Barang</label><br>
                <div id="imagePreview"></div>
                {{-- <img src="img/profile.svg" class="image" /> --}}
                <input type="file" class="form-control" id="imageInput" multiple accept="image/*" onchange="handleFiles(this.files)" name="product_image">
            </div>

            <div class="form-group">
                <label for="nameFormInput">Nama Sampah</label><br>
                <input type="text" class="form-control" id="nameInput" placeholder="Masukkan Nama Sampah" name="product_name">
            </div>

            <div class="form-group">
                <label for="cathegoryFormInput">Kategori Sampah</label><br>
                <select class="form-select" id="cathegoryInput" aria-label="Select Cathegory" name="product_cathegory">
                    <option selected value="plastik">Plastik</option>
                    <option value="elektronik">Elektronik</option>
                    <option value="kaca">Kaca</option>
                    <option value="logam">Logam</option>
                    <option value="B3">Bahan Berbahaya dan Beracun</option>
                    <option value="kertas">Kertas</option>
                    <option value="textile">Textile</option>
                    <option value="medis">Medis</option>
                    <option value="karet">Karet</option>
                    <option value="minyakbekas">Minyak Bekas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="currency-fieldInput">Harga Sampah</label>
                <input type="text" class="form-control" id="priceInput" placeholder="Rp.0" name="product_price">
            </div>

            <div class="form-group">
                <label for="DescriptionTextarea">Deskripsi Sampah</label><br>
                <textarea class="form-control" id="descriptionTextarea" rows="3" placeholder="deskripsikan tentang sampah anda" name="product_description"></textarea>
            </div>          
            

            <input type="submit" class="form-group btn btn-primary form-control" id="submitAllInput" value="Upload">
        </form>

    </div>
</div>
@endsection
