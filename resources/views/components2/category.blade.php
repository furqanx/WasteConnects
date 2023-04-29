<!-- kategori untuk desktop -->
<div class="desktop">
    <div class="d-flex flex-row ">
        <div class="p-2 h5 "><b>Kategori</b></div>
        <div class="p-2">
            @foreach ($categories as $category)
                <a href="#" class="none mx-2">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>


<!-- kategori Panel phone -->
<div class="phone">
    <div class="container-fluid bg-success phone">
        <span class="text-light"><b>Kategori</b></span>
    </div>

    <div class="container-fluid scroll-container hide-scroll mt-2 phone">
        @foreach ($categories as $category)
            <div class="scroll-item col-sm">
                <a href="#">
                    <img class="mx-3" width="50" height="50" src="{{ asset('img/water-bottle.png') }}"
                        alt="Gambar 1">
                    <p>{{ $category->name }}</p>
                </a>
            </div>
        @endforeach

    </div>
</div>
