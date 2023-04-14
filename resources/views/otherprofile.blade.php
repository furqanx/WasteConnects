@extends('layouts.main')

@section('content')

    <!-- komponen untuk navbar -->
    @include('partials.navbar')

    <div class="">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                      <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                            alt="Generic placeholder image" class="img-fluid"
                            style="width: 180px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-1">Danny McLoan</h5>
                          <p class="mb-2 pb-1" style="color: #2b2a2a;">Senior Journalist</p>
                          <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                            style="background-color: #efefef;">
                            <div>
                              <p class="small text-muted mb-1">Articles</p>
                              <p class="mb-0">41</p>
                            </div>
                            <div class="px-3">
                              <p class="small text-muted mb-1">Followers</p>
                              <p class="mb-0">976</p>
                            </div>
                            <div>
                              <p class="small text-muted mb-1">Rating</p>
                              <p class="mb-0">8.5</p>
                            </div>
                          </div>
                          <div class="d-flex pt-1">
                            <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                            <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>

    {{-- <div class="">
        <div class="d-flex flex-wrap align">
  
            @foreach ($products as $product)
              <a href="/post/{{ $product->id }}}">
                <div class="card mt-2 mb-2 size-item">
                  <img
                    class="size-item"
                    src="{{ asset('images/' . $product->path_gambar_sampah) }}"
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
        
        </div>
    </div> --}}
    
@endsection