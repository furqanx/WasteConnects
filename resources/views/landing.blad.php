@extends('layouts.app2')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-end">

        {{-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                <li><a class="getstarted scrollto" href="{{ route('products') }}">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('img/carousel-1.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate_animated animate_fadeInDown">Selamat Datang di WasteConnect!</h2>
                        <p class="animate_animated animate_fadeInUp">Temukan peluang emas dalam sampah.
                            Menghubungkan anda dengan pengguna yang mencari atau menawarkan sampah berkualitas.
                            Bergabunglah dan jadilah bagian dari gerakan daur ulang yang berkelanjutan.</p>
                        <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('img/carousel-2.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate_animated animate_fadeInDown">Sampah yang Anda cari, ada di sini!</h2>
                        <p class="animate_animated animate_fadeInUp">Cari dan temukan jenis sampah yang Anda butuhkan.
                            Dari kertas hingga logam, pilihlah dengan mudah melalui aplikasi kami.
                            Kembangkan usaha daur ulang Anda dengan WasteConnect.</p>
                        <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{ asset('img/carousel-3.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate_animated animate_fadeInDown">Berikan nilai tambah pada sampah Anda!</h2>
                        <p class="animate_animated animate_fadeInUp">Tawarkan sampah yang Anda miliki dan temukan
                            peminatnya.
                            Dengan WasteConnect, jual atau berbagi sampah dengan mudah. Satu langkah kecil untuk
                            mengurangi limbah dan mendukung lingkungan.</p>
                        <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    {{-- <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur trade stravi</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section --> --}}

    @endsection