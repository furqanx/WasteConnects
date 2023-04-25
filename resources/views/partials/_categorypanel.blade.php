<!-- kategori untuk desktop -->
<div class="desktop">
    <div class="d-flex flex-row ">
      <div class="p-2 h5 "><b>Kategori</b></div>
      <div class="p-2">
        <a href="{{ route('home.category', ['category' => 'plastik']) }}" class="none mx-2" >Plastik</a>
        <a href="{{ route('home.category', ['category' => 'elektronik']) }}" class="none mx-2" >Elektronik</a>
        <a href="{{ route('home.category', ['category' => 'kaca']) }}" class="none mx-2" >Kaca</a>
        <a href="{{ route('home.category', ['category' => 'logam']) }}" class="none mx-2" >Logam</a>
        <a href="{{ route('home.category', ['category' => 'B3']) }}" class="none mx-2" >Bahan Berbahaya dan Beracun</a>
        <a href="{{ route('home.category', ['category' => 'kertas']) }}" class="none mx-2" >Kertas</a>
        <a href="{{ route('home.category', ['category' => 'textile']) }}" class="none mx-2" >Textile</a>
        <a href="{{ route('home.category', ['category' => 'medis']) }}" class="none mx-2" >Medis</a>
        <a href="{{ route('home.category', ['category' => 'karet']) }}" class="none mx-2" >Karet</a>
        <a href="{{ route('home.category', ['category' => 'minyakbekas']) }}" class="none mx-2" >Minyak Bekas</a>
      </div>
    </div>
</div>


  <!-- kategori Panel phone -->
<div class="phone">
  <div class="container-fluid bg-success phone">
    <span class="text-light"><b>Kategori</b></span>
  </div>

  <div class="container-fluid scroll-container hide-scroll mt-2 phone">
      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'plastik']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/water-bottle.png') }}" alt="Gambar 1">
          <p>Plastik</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'elektronik']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/electronic.png') }}" alt="Gambar 1">
          <p>Elektronik</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'kaca']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/glasses.png') }}" alt="Gambar 1">
          <p>Kaca</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'logam']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/waste.png') }}" alt="Gambar 1">
          <p>Logam</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'B3']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/B3.png') }}" alt="Gambar 1">
          <p>Bahan Berbahaya</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'kertas']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/bin.png') }}" alt="Gambar 1">
          <p>Kertas</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'textile']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/textile.png') }}" alt="Gambar 1">
          <p>Textile</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'medis']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/biomedical-waste.png') }}" alt="Gambar 1">
          <p>Medis</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'karet']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/rubber.png') }}" alt="Gambar 1">
          <p>Karet</p>
        </a>
      </div>

      <div class="scroll-item col-sm">
        <a href="{{ route('home.category', ['category' => 'minyakbekas']) }}">
          <img class="mx-3" width="50" height="50" src="{{ asset('img/minyak-bekas.png') }}" alt="Gambar 1">
          <p>Minyak Bekas</p>
        </a>
      </div>

  </div>
</div>