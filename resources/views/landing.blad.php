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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About Us</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                    Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('img/team-photo.jpeg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
                    <p class="fst-italic">
                        Kami di WasteConnect berkomitmen untuk mengubah cara orang berinteraksi dengan sampah.
                        Dengan platform inovatif kami, kami menghubungkan mereka yang memiliki sampah dengan mereka yang
                        mencarinya untuk keperluan mereka sendiri. Tujuan kami adalah menciptakan lingkungan yang lebih
                        berkelanjutan dengan memfasilitasi daur ulang dan penggunaan kembali sampah.
                    </p>
                    {{-- <ul>
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </li>
                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                            fugiat nulla pariatur.</li>
                    </ul> --}}
                    <p>
                        Visi kami adalah membangun komunitas yang sadar lingkungan di mana sampah dianggap sebagai
                        sumber daya berharga.
                        Kami ingin menciptakan platform yang memudahkan individu dan bisnis dalam mencari, memperoleh,
                        dan memanfaatkan
                        sampah dengan cara yang bertanggung jawab. Dengan demikian, kami berharap dapat berkontribusi
                        pada penurunan
                        limbah dan pemulihan lingkungan.
                    </p>
                    <p>
                        Misi kami adalah menyediakan solusi yang inovatif dan efisien untuk menghubungkan pengguna
                        dengan sampah yang mereka
                        butuhkan atau ingin tawarkan. Kami berkomitmen untuk memberikan pengalaman yang aman, nyaman,
                        dan andal bagi
                        pengguna kami. Kami juga bertujuan untuk meningkatkan kesadaran akan pentingnya daur ulang dan
                        mengurangi dampak
                        negatif limbah terhadap lingkungan.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    {{-- <section id="why-us" class="why-us">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 content-item">
                    <span>01</span>
                    <h4>Lorem Ipsum</h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>02</span>
                    <h4>Repellat Nihil</h4>
                    <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno
                        para dest</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>03</span>
                    <h4> Ad ad velit qui</h4>
                    <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>04</span>
                    <h4>Repellendus molestiae</h4>
                    <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando
                        casa</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>05</span>
                    <h4>Sapiente Magnam</h4>
                    <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est
                        quibusdam</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>06</span>
                    <h4>Facilis Impedit</h4>
                    <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus
                        corporis sequi</p>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section --> --}}

    <!-- ======= Our Clients Section ======= -->
    {{-- <section id="clients" class="clients">
        <div class="container">

            <div class="section-title">
                <h2>Our Clients</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Our Clients Section --> --}}

    @endsection