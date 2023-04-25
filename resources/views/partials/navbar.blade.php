 <!-- navbar utama -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-success" href="{{ route('home') }}"><b>Waste Connect</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">Profil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Pesan</a>
          </li>

        </ul>

        <ul class="navbar-nav ms-auto">
           <li class="nav-item">
             <a class="nav-link" href="/logout"><img src="{{ asset('img/box-arrow-in-right.svg') }}"> Log out</a>
           </li>
        </ul>

        <form class="d-flex" action="/post">
          <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>