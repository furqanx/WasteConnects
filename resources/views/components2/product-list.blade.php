<div class="d-flex flex-wrap align mx-5">
    
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 300px; width: 500px;">
                <img src="{{ asset('img/botol kaca.jpg') }}" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sampah botol plastik.jpg') }}" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sampah rumah tangga.jpg') }}" alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

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

    @if (Route::currentRouteName() == 'myproducts')
        <div class="card mt-2 mb-2 size-item">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <a href="{{ route('product.create') }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
    @endif

</div>
