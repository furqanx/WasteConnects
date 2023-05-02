<div class="d-flex flex-wrap align mx-5">

    @foreach ($products as $product)
        <div class="card mt-2 mb-2 size-item">
            <a href="{{ route('product.show', ['id' => $product->id]) }}">
                <div>
                    <img class="size-item" src="{{ asset('product_images/no-image.png') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h6 class="card-title text-success" style="font-size: small">
                            <b>{{ $product->name }}</b>
                        </h6>
                        <p class="card-text">Rp. {{ $product->price }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

    @if (Route::currentRouteName() == 'myproducts')
        <div class="card mt-2 mb-2 size-item">
                <div>
                    <img class="size-item" src="{{ asset('product_images/no-image.png') }}" alt="Card image cap" />
                    <div class="card-body">
                        Tambah Sampah Anda
                    </div>
                </div>
            <div class="card-footer">
                <a href="{{ route('product.create') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
    @endif
</div>
