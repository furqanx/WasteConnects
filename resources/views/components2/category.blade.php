<!-- kategori untuk desktop -->
<div class="desktop">
    <div class="d-flex flex-row ">
        <div class="p-2 h5 "><b>Kategori</b></div>
        <div class="p-2">
            <a href="#" onclick="searchByCategory('')"
                class="none mx-2">Semua</a>
            @if (isset($category_current))
                @foreach ($categories as $category)
                    @if ($category->products()->has('category')->count() > 0)
                        {{-- Ubah style untuk menandakan dimana category sekarang --}}
                        @if ($category_current == $category)
                            <a href="#" onclick="searchByCategory({{ $category->id }})"
                                class="none mx-2 text-success">{{ $category->name }}</a>
                        @else
                            <a href="#" onclick="searchByCategory({{ $category->id }})"
                                class="none mx-2">{{ $category->name }}</a>
                        @endif
                    @endif
                @endforeach
            @else
                @foreach ($categories as $category)
                    @if ($category->products()->has('category')->count() > 0)
                        <a href="#" onclick="searchByCategory({{ $category->id }})"
                            class="none mx-2">{{ $category->name }}</a>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>


<!-- kategori Panel phone -->
<div class="phone">
    <div class="container-fluid bg-success phone">
        <span class="text-light"><b>Kategori</b></span>
    </div>

    <div class="container-fluid scroll-container hide-scroll mt-2 phone">
        @if (isset($category_current))
            @foreach ($categories as $category)
                @if ($category->products()->has('category')->count() > 0)
                    {{-- Ubah style untuk menandakan dimana category sekarang --}}
                    @if ($category_current == $category)
                        <div class="scroll-item col-sm">
                            <a href="#" onclick="searchByCategory({{ $category->id }})">
                                <img class="mx-3" width="50" height="50"
                                    src="{{ asset('img/water-bottle.png') }}" alt="{{ $category->name }}">
                                <p>{{ $category->name }}</p>
                            </a>
                        </div>
                    @else
                        <div class="scroll-item col-sm">
                            <a href="#" onclick="searchByCategory({{ $category->id }})">
                                <img class="mx-3" width="50" height="50"
                                    src="{{ asset('img/water-bottle.png') }}" alt="{{ $category->name }}">
                                <p>{{ $category->name }}</p>
                            </a>
                        </div>
                    @endif
                @endif
            @endforeach
        @else
            @foreach ($categories as $category)
                <div class="scroll-item col-sm">
                    <a href="#" onclick="searchByCategory({{ $category->id }})">
                        <img class="mx-3" width="50" height="50" src="{{ asset('img/water-bottle.png') }}"
                            alt="{{ $category->name }}">
                        <p>{{ $category->name }}</p>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>
    function searchByCategory(categoryId) {
        // Mengisi nilai category_id ke dalam form di navigation2.blade.php
        document.getElementById('category-id').value = categoryId;

        // Submit form
        document.getElementById('search-form').submit();
    }
</script>
