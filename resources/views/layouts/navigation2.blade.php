 <!-- navbar utama -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
     <div class="container-fluid">
         <a class="navbar-brand text-success" href="{{ route('products') }}"><img
                 src="{{ asset('waste_connect_logo.png') }}" width="180" height="40"></a>

         @if (isset($address_current))
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>


             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                     <li class="nav-item">
                         {{-- <a class="nav-link" href="{{ route('profile', auth()->user()->id) }}">Profil</a> --}}
                         @auth
                             <a class="nav-link" href="{{ route('profile.edit') }}">Profil</a>
                             <a class="nav-link" href="{{ route('myproducts') }}">Sampah Saya</a>
                         @endauth

                     </li>

                     <!-- <li class="nav-item">
                     <a class="nav-link" href="#">Pesan</a>
                 </li> -->

                 </ul>

                 <ul class="navbar-nav ms-auto">
                     @guest
                         <li class="nav-item">
                             <a class="nav-link text-success" href="{{ route('register') }}"> Daftar </a>
                         </li>
                     @endguest

                     @auth
                         <li class="nav-item">
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                             <a class="nav-link" href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 Logout
                             </a>
                         </li>
                     @endauth

                 </ul>

                 <form class="d-flex" action="{{ route('products.search') }}" method="GET" id="search-form">
                     @csrf
                     <select class="form-select" name="address_id" id="address-select">
                         <option value="{{ $address_current->id }}" selected disabled>{{ $address_current->district }}
                         </option>
                         @foreach ($addresses as $address)
                             <option value="{{ $address->id }}">{{ $address->district }}</option>
                         @endforeach
                     </select>

                     <input type="hidden" id="category-id" name="category_id">

                     <input class="form-control me-2" type="text" placeholder="Cari..." aria-label="Search"
                         name="query">
                     <button class="btn btn-outline-success" type="submit">Cari</button>
                 </form>
         @endif
     </div>
     </div>
 </nav>

 <script>
     var addressSelect = document.getElementById('address-select');
     addressSelect.addEventListener('change', function() {
         document.getElementById('search-form').submit();
     });
 </script>
