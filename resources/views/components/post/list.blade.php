<div class="d-flex flex-wrap align mx-5">
  
    @foreach ($products as $product)

      <a href="/post/{{ $product->id }}}">
        <div class="card mt-2 mb-2 size-item">
          <img
            class="size-item"
            src="{{ asset('product_images/' . $product->path_gambar_sampah) }}"
            alt="Card image cap"
          />
          <div class="card-body">
            <h6 class="card-title text-success" style="font-size: small">
              <b>{{ $product->nama_sampah }}</b>
            </h6>
            <p class="card-text">Rp. {{ $product->harga_sampah }}/kg</p>
          </div>
        </div>
      </a>
      
    @endforeach

    <a class="add-post-btn" href="{{ route('post.create') }}">
        <img class="add-post-img" src="{{ asset('img/add-button.png') }}" alt="add-button icon" width="50" height="50">
    </a>

</div>