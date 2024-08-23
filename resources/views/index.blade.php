@extends('main')
@section('content')
    <main>
        <div class="container-xxl bg-white p-0">
            <div class="container-xxl py-5 hero-header mb-5" style="background-color: #838dfc;">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5">

                        <div class="col-lg-7 pt-5 text-center text-lg-start p-0">
                            <h6 class="display-5 text-light mb-4 animated slideInLeft"><b>Mengubah Inovasi Teknologi Menjadi Solusi Nyata</b></h6>
                            <p class="text-light animated slideInLeft">Dalam portfolio ini akan menampilkan proses dan hasil kerja keras yang saya peroleh tentang proyek IT, mulai dari perangkat lunak hingga solusi sistem kompleks. Setiap karya mencerminkan dedikasi saya terhadap inovasi, menunjukkan bagaimana ide teknologi menjadi solusi efektif yang memenuhi kebutuhan nyata.</p>
                            <a href="#contact" class="btn text-light py-2 px-4 animated slideInLeft" style="background-color: #4251fc;">Hire me</a>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end">
                            <img class="img-fluid animated zoomIn" style="width: 400px;" src="/portfolio-laravel/img/bg-pic-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Start -->
        <div class="container-xxl feature py-3">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded fw-semi-bold py-1 px-3" style="color: #4251fc;">Fakta Menarik!</p>
                        {{-- <h1 class="display-5 mb-4">Beberapa Fakta yang Perlu Anda Ketahui!</h1> --}}
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">Beberapa Fakta yang Perlu Anda Ketahui!</h1>
                        </div>

                        {{-- <div class="info-container mb-4">
                            <div class="info-item">
                                <h5 class="info-title">- Teknologi Terbaru</h5>
                            </div>
                            <div class="info-item">
                                <h5 class="info-title">- Pencapaian Signifikan</h5>
                            </div>
                            <div class="info-item">
                                <h5 class="info-title">- Komitmen pada Keberlanjutan</h5>
                            </div>
                        </div> --}}
                        <div class="info-container mb-4">
                            <div class="info-item">
                                <p class="info-title mb-0">- Mengenai Saya</p>
                            </div>
                            <div class="info-item">
                                <p class="info-title mb-0">- Proyek apa yang saya kerjakan</p>
                            </div>
                            <div class="info-item">
                                <p class="info-title">- Kontribusi dan TeamWork</p>
                            </div>
                        </div>

                        {{-- <a class="btn py-3 text-light px-5" style="background-color: #4251fc;" href="#">Jelajahi Lebih Lanjut</a> --}}
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="feature-box border rounded p-4">
                                            {{-- <i class="fa fa-check fa-3x mb-3" style="color: #4251fc;"></i> --}}
                                            <h4 class="mb-3">Kreativitas & Inovasi</h4>
                                            <p class="mb-3">Selalu mencari cara baru dan kreatif untuk menyelesaikan masalah dan memberikan solusi yang efektif.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="feature-box border rounded p-4">
                                            {{-- <i class="fa fa-check fa-3x mb-3" style="color: #4251fc;"></i> --}}
                                            <h4 class="mb-3">Kelanjutan</h4>
                                            <p class="mb-3">Selalu belajar dan mengembangkan diri untuk tetap relevan dan unggul di bidang yang saya geluti.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="feature-box border rounded p-4">
                                    {{-- <i class="fa fa-check fa-3x mb-3" style="color: #4251fc;"></i> --}}
                                    <h4 class="mb-3">Komitmen</h4>
                                    <p class="mb-3">Saya berkomitmen untuk menyelesaikan setiap proyek dalam waktu yang telah ditentukan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        {{-- <div class="container py-5">
            <div class="educations" id="education">
                <h2 class="text-center mb-5">Edukasi</h2>
                <ul>
                    <?php $i = 1; ?>
                    @foreach ($data_education as $item)
                        <li>
                            <div class="card education-card">
                                <div class="card-body">
                                    <div style="display: flex; align-items: center">
                                        <h3><b>{{ $item->nama }} </b></h3>
                                        <p id="tahun" style="margin-left: auto;">{{ $item->start_date->format('Y') }} - {{ $item->end_date->format('Y') }}</p>
                                    </div>
                                    <p>{{ $item->jurusan }}</p>
                                    <p>{{ strip_tags($item->desc)}}</p>
                                </div>
                            </div>
                        </li>
                        <?php $i++; ?>
                    @endforeach
                </ul>
            </div>
        </div> --}}

        <!-- About Start -->
        <div class="container-xxl py-5 mt-5 mb-5" style="background-color: #838dfc;">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-white rounded text-center p-2">
                                    <i class="fa fa-users-cog fa-2x mb-2" style="color: #4251fc;"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">152</h2>
                                    <p class="mb-0">Jam Kerja</p>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-white rounded text-center p-2">
                                    <i class="fa fa-users fa-2x mb-2" style="color: #4251fc;"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">5</h2>
                                    <p class="mb-0">Project selesai</p>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-white rounded text-center p-2">
                                    <i class="fa fa-check fa-2x mb-2" style="color: #4251fc;"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">2</h2>
                                    <p class="mb-0">Project dikerjakan</p>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-white rounded text-center p-2">
                                    <i class="fa fa-check fa-2x mb-2" style="color: #4251fc;"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">8</h2>
                                    <p class="mb-0">Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">Hallo!</h1>
                        </div>
                        <p class="mb-4">
                            Saya Nadila Kheisa, seorang pelajar yang saat ini sedang menempuh pendidikan di SMK PGRI, jurusan Rekayasa Perangkat Lunak (RPL).
                        </p>
                        <p class="mb-4">
                        Dengan ketertarikan yang mendalam dalam bidang teknologi dan pengembangan perangkat lunak, saya bersemangat untuk mempelajari berbagai aspek dari dunia IT dan mempersiapkan diri untuk menghadapi tantangan di industri teknologi.
                        </p>
                        <p class="mb-4">
                        Saya usahakan untuk aktif terlibat dalam proyek-proyek kreatif dan berkomitmen untuk terus mengembangkan keterampilan teknis dan pemahaman saya tentang teknologi terkini.
                        </p>
                        <!-- <div class="row g-3">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Experts</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Projects</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/portfolio-laravel/img/bg-removebg-preview.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container py-5">
            <div class="educations" id="education">
                {{-- <h2 class="text-center mb-4">Education</h2> --}}
                <div class="section-title position-relative mb-4 pb-4 text-center">
                    <h1 class="mb-2">Edukasi</h1>
                </div>
                <div class="timeline">
                    @foreach ($data_education as $item)
                        <li class="timeline-item mb-4">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div style="display: flex; justify-content: space-between;">
                                    <h4 class="timeline-title"><b>{{ $item->nama }}</b></h4>
                                    <span class="timeline-date">{{ $item->start_date->format('Y') }} - {{ $item->end_date->format('Y') }}</span>
                                </div>
                                <p class="text-muted small">{{ $item->jurusan }}</p>
                                <p class="small mb-0">{{ strip_tags($item->desc) }}</p>
                            </div>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>



        <section class="ftco-hireme mt-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-9 col-lg-8 d-flex align-items-center justify-items-center">
                        <div class="w-100 py-4 p-5">
                            <h2>Mempunyai proyek yang ingin ditangani?</h2>
                            <p>Projek seperti Aplikasi perhitungan, desain web, rancangan UI UX, dan lain sebagainya. Simak Proyek apa yang saya kerjakan dan berkontribusi apa saya dalam proyek tersebut.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 d-flex align-items-end">
                        <img src="/portfolio-laravel/img/amu-project.png" class="img-fluid" alt="" style="width: 70%; height:240px;">
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="project-section" id="project">
                {{-- <h2 class="text-center mb-5">Project</h2> --}}
                <div class="section-title position-relative mb-4 pb-4 text-center">
                    <h1 class="mb-2">Proyek</h1>
                </div>
                <div class="row" style="display: flex; justify-content: center; flex-wrap: wrap;">
                    @foreach ($data_project as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="custom-card">
                                <img src="{{ asset('images/' . $item->gambar) }}" class="custom-card-img" alt="project1">
                                <div class="custom-card-body">
                                    <h5 class="custom-card-title">{{ $item->judul }}</h5>
                                    {{-- <p class="custom-card-text">{{ strip_tags($item->desc) }}</p> --}}
                                    {{-- <a href="{{ $item->link }}" class="btn text-light" style="background-color: #4251fc">Link</a> --}}
                                    <a href="{{ route('project.show', str_replace(' ', '-', $item->judul)) }}" class="btn text-light" style="background-color: #4251fc">Detail Project</a>
                                    {{-- <a href="{{ route('project.show', strtolower(str_replace(' ', '-', $item->judul))) }}" class="btn text-light" style="background-color: #4251fc">Detail Project</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">





            <section class="ftco-section" id="services-section">
                <div class="container ">
                    <div class="row justify-content-center pt-5">
                        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                            {{-- <span class="subheading">Riwayat P</span> --}}
                            {{-- <h2 class="mb-4">Riwayat</h2> --}}
                            <div class="section-title position-relative mb-4 pb-4 text-center">
                                <h1 class="mb-2">Riwayat Pengerjaan</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fas fa-paint-brush" style="font-size: 2rem;"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Desain Web</h3>
                                    <p>Mendesain tata letak dan antarmuka situs web untuk menciptakan pengalaman pengguna yang menarik dan fungsional.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon shadow d-flex align-items-center justify-content-center">
                                    <i class="fas fa-laptop-code" style="font-size: 2rem;"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Aplikasi Web</h3>
                                    <p>Mengembangkan aplikasi web yang responsif dan mudah digunakan untuk memenuhi kebutuhan bisnis dan pengguna. Semakin lancar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon shadow d-flex align-items-center justify-content-center">
                                    <i class="fas fa-code" style="font-size: 2rem;"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Pengembangan Web</h3>
                                    <p>Membangun dan memelihara situs web dengan kode yang bersih dan efisien, memastikan kinerja optimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center" style="font-size: 2rem;">
                                    <i class="fas fa-users"></i> <!-- Ikon Teamwork -->
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Teamwork</h3>
                                    <p>Bekerja sama dalam tim untuk menyelesaikan proyek dengan efisien, berbagi ide, dan menyelesaikan masalah secara kolektif.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon shadow d-flex align-items-center justify-content-center"><i class="fas fa-tags"></i></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Branding</h3>
                                    <p>Menetapkan identitas merek yang kuat melalui desain logo, tipografi, dan palet warna untuk  konsisten.</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center" style="font-size: 2rem;">
                                    <i class="fas fa-database"></i> <!-- Ikon Pengembangan CRUD -->
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Pengembangan CRUD</h3>
                                    <p>Membangun dan mengelola aplikasi CRUD (Create, Read, Update, Delete) memudahkan manajemen data dsb.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center" style="font-size: 2rem;">
                                    <i class="fas fa-code"></i> <!-- Ikon Pengembangan API -->
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Pengembangan API</h3>
                                    <p>Mendesain dan mengembangkan API untuk memungkinkan komunikasi antar aplikasi dan integrasi sistem yang efisien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon shadow d-flex align-items-center justify-content-center"><i class="fas fa-image" style="font-size: 2rem;"></i></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Desain Grafis</h3>
                                    <p>Menciptakan elemen grafis seperti poster, brosur, dan materi pemasaran lainnya untuk komunikasi visual yang baik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                                <div class="icon shadow d-flex align-items-center justify-content-center"><i class="fas fa-search" style="font-size: 2rem;"></i></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">SEO</h3>
                                    <p>Optimasi situs web untuk mesin pencari agar lebih mudah ditemukan oleh audiens target yang baik selama itu terjadi berulang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comparison Start -->
            <div class="container-xxl py-5">
                <div class="container px-lg-5">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Bahasa Pemograman</h1>
                        {{-- <p class="mb-1">Apa saja yang selama ini saya pelajari.</p> --}}
                    </div>
                    <div class="row g-5 position-relative justify-content-center" style="display: flex; flex-wrap: wrap; justify-content: center;">
                        <div class="col-lg-12 pe-lg-5">
                            <div class="row gy-3 gx-5" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.1s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/laragon.jpeg" alt="Icon 1" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.3s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/laravel.png" alt="Icon 2" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.5s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/js.png" alt="Icon 3" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.7s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/html.png" alt="Icon 4" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.1s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/php.png" alt="Icon 5" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.3s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/css.png" alt="Icon 6" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.5s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/github.png" alt="Icon 7" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.7s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/react.png" alt="Icon 8" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                                <div class="col-sm-2 wow fadeIn" data-wow-delay="0.7s" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <img src="/portfolio-laravel/img/git.png" alt="Icon 9" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comparison End -->

             <!-- Blog Start -->
             <div class="container-fluid blog py-5 pt-4">
                <div class="container py-5">
                    {{-- <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                        <h4 class="" style="color: #4251fc;">Artikel</h4>
                        <h1 class="mb-3">Artikel Seputar IT</h1>
                    </div> --}}
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Artikel</h1>
                        {{-- <p class="mb-1">Apa saja yang selama ini saya pelajari.</p> --}}
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="/portfolio-laravel/img/blog-1.jpeg" class="img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-user" style="color: #4251fc;"></span>Admin</div>
                                        <div class="small"><span class="fa fa-calendar" style="color: #4251fc;"></span> 30 Des 2025</div>
                                        <div class="small"><span class="fa fa-comment-alt" style="color: #4251fc;"></span> 6 Comments</div>
                                    </div>
                                    <a href="#" class="h4 d-inline-block mb-3">Panduan Pemula untuk Menggunakan Git dan GitHub</a>
                                    <p class="mb-3">Git dan GitHub adalah alat yang sangat penting dalam pengembangan perangkat lunak modern yang semakin maju.</p>
                                    <!-- <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="/portfolio-laravel/img/blog-2.jpeg" class="img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-user" style="color: #4251fc;"></span>Admin</div>
                                        <div class="small"><span class="fa fa-calendar" style="color: #4251fc;"></span> 30 Des 2025</div>
                                        <div class="small"><span class="fa fa-comment-alt" style="color: #4251fc;"></span> 6 Comments</div>
                                    </div>
                                    <a href="#" class="h4 d-inline-block mb-3">Membuat Aplikasi Web Sederhana dengan HTML, CSS, dan JavaScript</a>
                                    <p class="mb-3">Jika Anda baru dalam pengembangan web dan ingin memulai, artikel ini adalah tempat yang  </p>
                                    <!-- <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="/portfolio-laravel/img/blog-3.jpeg" class="img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-user" style="color: #4251fc;"></span>Admin</div>
                                        <div class="small"><span class="fa fa-calendar" style="color: #4251fc;"></span> 30 Des 2025</div>
                                        <div class="small"><span class="fa fa-comment-alt" style="color: #4251fc;"></span> 6 Comments</div>
                                    </div>
                                    <a href="#" class="h4 d-inline-block mb-3">Belajar Pemrograman Berbasis Proyek: Pengalaman Mengembangkan Aplikasi Todo List</a>
                                    <p class="mb-3">Dalam artikel ini, saya akan membagikan pengalaman</p>
                                    <!-- <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Pricing Start -->
            <!-- <div class="container-xxl py-5">
                <div class="container px-lg-5">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Our Hosting Plans</h1>
                        <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                    </div>
                    <div class="row gy-5 gx-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="position-relative shadow rounded border-top border-5 border-primary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-share-alt text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">Share Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>2.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="position-relative shadow rounded border-top border-5 border-secondary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-server text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">VPS Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>5.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-secondary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="position-relative shadow rounded border-top border-5 border-primary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-cog text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">Dedi Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>11.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Pricing End -->


            <!-- Comparison Start -->
            <!-- <div class="container-xxl py-5">
                <div class="container px-lg-5">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Shared VS Dedicated Server</h1>
                        <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
                            ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                    </div>
                    <div class="row g-5 comparison position-relative">
                        <div class="col-lg-6 pe-lg-5">
                            <div class="section-title position-relative mx-auto mb-4 pb-4">
                                <h3 class="fw-bold mb-0">Shared Server</h3>
                            </div>
                            <div class="row gy-3 gx-5">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <i class="fa fa-server fa-3x text-primary mb-3"></i>
                                    <h5 class="fw-bold">99.99% Uptime</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                    <h5 class="fw-bold">100% Secured</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-cog fa-3x text-primary mb-3"></i>
                                    <h5 class="fw-bold">Control Panel</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                    <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                                    <h5 class="fw-bold">24/7 Support</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <div class="section-title position-relative mx-auto mb-4 pb-4">
                                <h3 class="fw-bold mb-0">Dedicated Server</h3>
                            </div>
                            <div class="row gy-3 gx-5">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                                    <h5 class="fw-bold">99.99% Uptime</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                                    <h5 class="fw-bold">100% Secured</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                                    <h5 class="fw-bold">Control Panel</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                    <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                                    <h5 class="fw-bold">24/7 Support</h5>
                                    <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Comparison Start -->


            <!-- Testimonial Start -->
            <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container px-lg-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                            <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                            <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                            <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                            <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Testimonial End -->
        </div>
        <section id="contact" class="contact-us pt-5">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-6">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="360px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
                        <div class="row">
                        <div class="col-lg-6 offset-lg-1">
                            <div class="contact-info">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h4>Phone</h4>
                            <span>010-020-0340</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <textarea name="message" id="message" placeholder="Pesan"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <button type="submit" id="form-submit" class="main-gradient-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <style>
        .custom-card {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%
        }

        .custom-card-img {
            width: 100%;
            height: 140px;
            object-fit: cover;
        }

        .custom-card-body {
            padding: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .custom-card-title {
            margin-bottom: 0.75rem;
        }

        .custom-card-text {
            flex: 1;
        }

        .btn-primary {
            margin-top: auto;
        }
        .custom-card .btn {
    background-color: #4251fc;
    border-radius: 5px;
    padding: 8px 16px;
    font-size: 14px;
    display: inline-block;
    width: auto;
    margin-top: auto; /* Menggeser tombol ke bawah */
}


        .custom-card .btn:hover {
            background-color: #5a65e0;
        }


    </style>
@endsection
