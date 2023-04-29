<div class="card rounded mx-auto mt-5" style="width: 18rem;">

    <!-- periksa lagi yang gambar -->
    <img class="card-img-top" src="{{ asset('product_images/' . $products->path_gambar_sampah) }}" alt="Card image">

    <div class="card-body shadow p-3 bg-white rounded">

        <p class="card-text"><strong>{{ $products->nama_sampah }}</strong><br></p>
        <img src="{{ asset('img/price-tag.svg') }}" width="20" height="20"> Rp. {{ $products->harga_sampah }}/Kg<br>
        <img src="{{ asset('img/location icon.svg') }}" width="20" height="20"> {{ $products->lokasi_sampah }}<br><br>
        {{ $products->deskripsi_sampah }}</p>
        <a href="{{ route('profile.show', $products->user_id) }}">
            <button type="button" class="btn btn-outline-success mx-auto">kunjungi pemilik</button>
        </a>
    </div>

</div>