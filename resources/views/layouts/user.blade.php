<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if (request()->is('/') ? 'active' : '')
    <title>Penanganan Kasus Hukum Terbaik & Terpecaya - Arza Law</title>
    @endif
    <title>@yield('title') - Arza Law</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/bootstrap.css') }}">
    <link href="{{ asset('lawmaker/images/arzalaw.png') }}" type="image/png" sizes="32x32" rel="shortcut icon">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lawmaker/css/owl.theme.default.min.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/flexslider.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.2-web/css/all.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('lawmaker/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('lawmaker/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <![endif]-->



</head>

<body>
    <div class="ftco-loader"></div>

    <div id="page">
        <nav class="ftco-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="ftco-logo"><a href="index.html">ARZA LAW</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                                <li class="nav-item {{ request()->is('pelayanan') ? 'active' : '' }}"><a href="{{ url('pelayanan') }}">Pelayanan</a></li>
                                <li class="nav-item {{ request()->is('dk') ? 'active' : '' }}"><a href="{{ url('dk') }}">Daftar Kasus</a></li>
                                <li class="nav-item {{ request()->is('galeri') ? 'active' : '' }}"><a href="{{ url('galeri') }}">Galeri</a></li>
                                <li class="nav-item {{ request()->is('tentang') ? 'active' : '' }}"><a href="{{ url('tentang') }}">Tentang Kami</a></li>
                                <li class="nav-item {{ request()->is('kontak') ? 'active' : '' }}"><a href="{{ url('kontak') }}">Kontak</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        @if (request()->is('/') ? 'active' : '')
        <aside id="ftco-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url('{{ asset('lawmaker/images/hero_1.jpg')}}');">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1><strong>Pertahankan Hak Anda Dengan Bantuan Legalitas Kami</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('{{ asset('lawmaker/images/hero_3.jpg')}}');">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1><strong>Jangan Sampai Anda Terintimidasi Suatu Masalah</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('{{ asset('lawmaker/images/hero_2.jpg')}}');">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1><strong>Pilihan Yang Tepat Adalah Menghubungi Kami</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <br><br><br>
        @endif
        @yield('content')
        @if (!request()->is('kontak') ? 'active' : '')
        <div id="intro-bg">
            <div class="container">
                <div id="ftco-intro" style="position: relative; margin-bottom: -150px!important;">
                    <div class="third-col">
                        <h2 class="h3">Butuh Layanan Hukum?</h2>
                        <p>Dapatkan pelayanan hukum terbaik dan terpecaya di ARZA LAW OFFICE, karena kantor kami berpengelaman dalam bidang hukum dan perdata.</p>
                    </div>
                    @php
                    $c = \App\Contact::where('id', 1)->first();
                    @endphp
                    <div class="third-col third-col-color">
                        <h2 class="h3">Hubungi Sekarang (021) 2283 5852</h2>
                        <p>Email kami <a href="https://mail.google.com/mail/?view=cm&source=mailto&to={{$c->email}}" target="_blank">{{$c->email}}</a></p>
                        <p>Syarat dan ketentuan berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <footer id="ftco-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 ftco-widget">
                        <h4>Arza Law</h4>
                        @php
                        $f = \App\Footer::where('id', 1)->first();
                        @endphp
                        <p>{{$f->isi1}}</p>
                    </div>
                    <div class="col-md-2 col-md-push-1">
                        <h4>Pintasan</h4>
                        <ul class="ftco-footer-links">
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ url('pelayanan') }}">Pelayanan</a></li>
                            <li><a href="{{ url('dk') }}">Daftar Kasus</a></li>
                            <li><a href="{{ url('galeri') }}">Galeri</a></li>
                            <li><a href="{{ url('tentang') }}">Tentang Kami</a></li>
                            <li><a href="{{ url('kontak') }}">Informasi Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Jam Operasional</h4>
                        <ul class="ftco-footer-links">
                            <li style="white-space:pre-line">{{$f->isi2}}</li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Informasi Kontak</h4>
                        <ul class="ftco-footer-links">
                            <li>{{$c->alamat}}</li>
                            <li><a href="tel://{{$c->notlp}}">{{$c->notlp}}</a></li>
                            <li><a href="https://mail.google.com/mail/?view=cm&source=mailto&to={{$c->email}}">{{$c->email}}</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        <p>
                            <ul class="ftco-social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone={{$c->whatsapp}}&text=Halo%20saya%20ingin%20bertanya%20mengenai%20penutupan%20kartu%20kredit/KTA%20atau%20permasalahan%20hukum%20lainnya,%20sesuai%20informasi%20yang%20ada%20di%20website%20ARZA%20LAW%20OFFICE"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('lawmaker/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('lawmaker/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('lawmaker/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('lawmaker/js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('lawmaker/js/jquery.stellar.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('lawmaker/js/owl.carousel.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('lawmaker/js/jquery.flexslider-min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('lawmaker/js/jquery.countTo.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('lawmaker/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('lawmaker/js/magnific-popup-options.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('lawmaker/js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
