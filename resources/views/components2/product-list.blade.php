<div class="d-flex flex-wrap align mx-3">
    @if (empty(json_decode($products)))
        <div class="alert alert-warning mt-4" role="alert">
            Maaf, tidak ada sampah yang ditemukan.
        </div>
    @else
        @foreach ($products as $product)
            <div class="card mt-2 mb-2 size-item">
                <a style="text-decoration: none" href="{{ route('product.show', ['id' => $product->id]) }}">
                    <img class="size-item" src="{{ asset('storage/product_images/' . $product->image) }}"
                        alt="{{ $product->name }}">

                    <div class="card-body">
                        <h6 class="card-title text-dark">
                            <b>{{ $product->name }}</b>
                        </h6>
                        <p class="card-text text-success">Rp. {{ $product->price }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    @endif

    @if (Route::currentRouteName() == 'myproducts')
        <div class="card mt-2 mb-2 size-item">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <a href="{{ route('product.create') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
    @endif

</div>
