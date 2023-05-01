@extends('layouts.app2')

@section('content')

    <div class="">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                      <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                          <img src="{{ asset('profile_images/' . $users->user_image) }}"
                            alt="Generic placeholder image" class="img-fluid"
                            style="width: 180px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-1">{{ $users->name }}</h5>
                          <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                            style="background-color: #efefef;">
                          <div class="d-flex pt-1">
                            {{-- <a href="{{ route('profile.edit', Auth::user()->id) }}"><button type="button" class="btn btn-primary flex-grow-1">Edit</button></a> --}}
                            @if ($users->id == auth()->user()->id)
                              <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}"><button type="button" class="btn btn-primary flex-grow-1">Edit</button></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    
@endsection