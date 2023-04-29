 <!-- navbar utama -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
     <div class="container-fluid">
         <a class="navbar-brand text-success" href="{{ route('products') }}"><b>Waste Connect</b></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                 <li class="nav-item">
                     {{-- <a class="nav-link" href="{{ route('profile.show', auth()->user()->id) }}">Profil</a> --}}
                     <a class="nav-link" href="#">Profil</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="#">Pesan</a>
                 </li>

             </ul>

             <ul class="navbar-nav ms-auto">
                 @guest
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('login') }}"> Login </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link">/</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}"> Daftar </a>
                     </li>
                 @endguest

                 @auth
                     <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                     </li>
                 @endauth

             </ul>

             <form class="d-flex" action="#">
                 <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" name="search"
                     value="{{ request('search') }}">
                 <button class="btn btn-outline-success" type="submit">Cari</button>
             </form>
         </div>
     </div>
 </nav>
