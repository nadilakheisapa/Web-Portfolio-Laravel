<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/portfolio-laravel/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/portfolio-laravel/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/portfolio-laravel/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/portfolio-laravel/css/style.css" rel="stylesheet">
    <link href="/portfolio-laravel/css/styles.css" rel="stylesheet">


    <style>
        @media (min-width: 992px) {
            .navbar-nav {
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
            }
        }
    </style>

</head>

<body>
    <!-- Navbar and other sections -->
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg bg-light navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0 text-dark">Portfolio.</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 justify-items-center">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                        {{-- <a href="{{ url('/halproject') }}" class="nav-item nav-link {{ request()->is('halproject') ? 'active' : '' }}">Project</a> --}}
                        <a href="{{ url('/haltentang') }}" class="nav-item nav-link {{ request()->is('haltentang') ? 'active' : '' }}">Tentang</a>
                        <a href="{{ url('/halblog') }}" class="nav-item nav-link {{ request()->is('halblog') ? 'active' : '' }}">Blog</a>
                        {{-- <a href="{{ url('/halcontact') }}" class="nav-item nav-link {{ request()->is('halcontact') ? 'active' : '' }}">Kontak</a> --}}
                    </div>
                    <a href="/login" class="btn text-light py-2 px-4 ms-3" style="background-color: #4f5df9;">Login</a>
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->

        <!-- Content Section -->
        <div class="content-section">
            @yield('content')
        </div>

        {{-- warna lilac: #939bf9; --}}

        <!-- Footer Start -->
        <div class="container-fluid text-white footer mt-5 pt-3 wow fadeIn" style="background-color:#838dfc;" data-wow-delay="0.1s">
            <div class="container py-3 px-lg-5">
                <div class="row gy-3 gx-4 pt-3">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Portfolio Website.</h5>
                        <p class="mb-2">Portofolio ini mencerminkan perjalanan saya dalam dunia pengembangan web dan desain. Setiap proyek yang ditampilkan dari dedikasi saya dalam mempelajari solusi yang inovatif dan efektif.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row gy-3 g-4">
                            {{-- <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Tautan Cepat</h5>
                                <a class="btn btn-link" href="{{ url('/') }}">Beranda</a>
                                <a class="btn btn-link" href="{{ url('haledukasi') }}">Edukasi</a>
                                <a class="btn btn-link" href="{{ url('halproject') }}">Project</a>
                                <a class="btn btn-link" href="{{ url('haltentang') }}">Tentang</a>
                                <a class="btn btn-link" href="{{ url('halcontact') }}">Kontak</a>
                            </div> --}}
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Visi & Misi</h5>
                                <p class="text-white mb-2"><strong>Visi:</strong> Menciptakan solusi teknologi yang bermanfaat dan relevan untuk kebutuhan pengguna.</p>
                                <p class="text-white"><strong>Misi:</strong> Mengembangkan aplikasi dan sistem dengan pendekatan yang berorientasi pada pengalaman pengguna dan inovasi.</p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Project</h5>
                                <a class="btn btn-link" href="#">Aplikasi</a>
                                <a class="btn btn-link" href="#">Landing Page</a>
                                <a class="btn btn-link" href="#">Desain UI UX</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Tentang</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Blitar</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 878 6449 6414</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>nadilakheisapa@gmail.com</p>
                        <div class="d-flex pt-2 gap-2">
                            <a class="btn btn-outline-light rounded-pill" href="https://github.com/nadilakheisapa" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            {{-- <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a> --}}
                            <a class="btn btn-outline-light rounded-pill" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Portfolio</a>,
                            Nadila Kheisa Putri Agustin<a class="border-bottom" href="#">, SMK PGRI Wlingi</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">Home</a>
                                <a href="#">Cookies</a>
                                <a href="#">Help</a>
                                <a href="#">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color:#4251fc; color:aliceblue;"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/portfolio-laravel/lib/wow/wow.min.js"></script>
    <script src="/portfolio-laravel/lib/easing/easing.min.js"></script>
    <script src="/portfolio-laravel/lib/waypoints/waypoints.min.js"></script>
    <script src="/portfolio-laravel/lib/counterup/counterup.min.js"></script>
    <script src="/portfolio-laravel/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="/portfolio-laravel/js/main.js"></script>
</body>

</html>
