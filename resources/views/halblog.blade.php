@extends('main')
@section('content')
    <main>
        <div class="container pt-5">
            <div class="row pt-5">

              <div class="col-lg-8 pt-5">

                <!-- Bagian Pos Blog -->
                <section id="blog-posts" class="blog-posts section">

                  <div class="container">
                    <div class="row gy-4">

                      <!-- Card Berita 1 -->
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-img">
                            <img src="/portfolio-laravel/img/blog-1.jpeg" alt="Teknologi AI" class="img-fluid">
                          </div>

                          <div class="card-body">
                            <p class="card-category">Teknologi</p>
                            <h2 class="card-title">
                              <a href="blog-details.html">Mengungkap Potensi Kecerdasan Buatan dalam Industri Teknologi</a>
                            </h2>
                            <div class="card-meta">
                              <p class="card-author">Admin</p>
                              <p class="card-date">
                                <time datetime="2024-08-10">10 Ags, 2024</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div><!-- Akhir item daftar pos -->

                      <!-- Card Berita 2 -->
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-img">
                            <img src="/portfolio-laravel/img/blog-3.jpeg" alt="Keamanan Siber" class="img-fluid">
                          </div>

                          <div class="card-body">
                            <p class="card-category">Keamanan</p>
                            <h2 class="card-title">
                              <a href="blog-details.html">Langkah-langkah Penting untuk Meningkatkan Keamanan Siber Perusahaan</a>
                            </h2>
                            <div class="card-meta">
                              <p class="card-author">Admin</p>
                              <p class="card-date">
                                <time datetime="2024-08-12">12 Ags, 2024</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div><!-- Akhir item daftar pos -->

                      <!-- Card Berita 3 -->
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-img">
                            <img src="/portfolio-laravel/img/blog-3.jpeg" alt="Cloud Computing" class="img-fluid">
                          </div>

                          <div class="card-body">
                            <p class="card-category">Cloud</p>
                            <h2 class="card-title">
                              <a href="blog-details.html">Cloud Computing: Manfaat dan Tantangan untuk Bisnis Modern</a>
                            </h2>
                            <div class="card-meta">
                              <p class="card-author">Admin</p>
                              <p class="card-date">
                                <time datetime="2024-08-15">15 Ags, 2024</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div><!-- Akhir item daftar pos -->

                      <!-- Card Berita 4 -->
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-img">
                            <img src="/portfolio-laravel/img/blog-1.jpeg" alt="Internet of Things" class="img-fluid">
                          </div>

                          <div class="card-body">
                            <p class="card-category">IoT</p>
                            <h2 class="card-title">
                              <a href="blog-details.html">Bagaimana Internet of Things Mengubah Cara Kita Berinteraksi dengan Teknologi</a>
                            </h2>
                            <div class="card-meta">
                              <p class="card-author">Admin</p>
                              <p class="card-date">
                                <time datetime="2024-08-18">18 Ags, 2024</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div><!-- Akhir item daftar pos -->

                    </div>
                  </div>

                </section><!-- /Bagian Pos Blog -->

                <!-- Bagian Halaman Blog -->
                <section id="blog-pagination" class="blog-pagination section">

                  <div class="container">
                    <div class="d-flex justify-content-center">
                      <ul>
                        <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>

                </section><!-- /Bagian Halaman Blog -->

              </div>

              <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                  <!-- Widget Pencarian -->
                  <div class="search-widget widget-item">

                    <h3 class="widget-title">Pencarian</h3>
                    <form action="">
                      <input type="text" placeholder="Cari...">
                      <button type="submit" title="Cari"><i class="bi bi-search"></i></button>
                    </form>

                  </div><!--/Widget Pencarian -->

                  <!-- Widget Kategori -->
                  <div class="categories-widget widget-item">

                    <h3 class="widget-title">Kategori</h3>
                    <ul class="mt-3">
                      <li><a href="#">Teknologi <span>(25)</span></a></li>
                      <li><a href="#">Keamanan <span>(12)</span></a></li>
                      <li><a href="#">Cloud <span>(5)</span></a></li>
                      <li><a href="#">IoT <span>(22)</span></a></li>
                    </ul>

                  </div><!--/Widget Kategori -->

                  <!-- Widget Pos Terbaru -->
                  <div class="recent-posts-widget widget-item">

                    <h3 class="widget-title">Pos Terbaru</h3>

                    <div class="post-item">
                      <img src="assets/img/blog/blog-recent-1.jpeg" alt="Teknologi AI" class="flex-shrink-0">
                      <div>
                        <h4><a href="blog-details.html">Mengungkap Potensi Kecerdasan Buatan dalam Industri Teknologi</a></h4>
                        <p><time datetime="2024-08-10">10 Ags, 2024</time></p>
                      </div>
                    </div>

                    <div class="post-item">
                      <img src="assets/img/blog/blog-recent-2.jpeg" alt="Keamanan Siber" class="flex-shrink-0">
                      <div>
                        <h4><a href="blog-details.html">Langkah-langkah Penting untuk Meningkatkan Keamanan Siber Perusahaan</a></h4>
                        <p><time datetime="2024-08-12">12 Ags, 2024</time></p>
                      </div>
                    </div>

                    <div class="post-item">
                      <img src="assets/img/blog/blog-recent-3.jpeg" alt="Cloud Computing" class="flex-shrink-0">
                      <div>
                        <h4><a href="blog-details.html">Cloud Computing: Manfaat dan Tantangan untuk Bisnis Modern</a></h4>
                        <p><time datetime="2024-08-15">15 Ags, 2024</time></p>
                      </div>
                    </div>

                    <div class="post-item">
                      <img src="assets/img/blog/blog-recent-4.jpeg" alt="Internet of Things" class="flex-shrink-0">
                      <div>
                        <h4><a href="blog-details.html">Bagaimana Internet of Things Mengubah Cara Kita Berinteraksi dengan Teknologi</a></h4>
                        <p><time datetime="2024-08-18">18 Ags, 2024</time></p>
                      </div>
                    </div>

                  </div><!--/Widget Pos Terbaru -->

                </div>

              </div>

            </div>
        </div>
    </main>

    <style>
/* CSS untuk card berita utama */
.card {
    border: 2px solid #ddd; /* Border warna abu-abu terang */
    border-radius: 8px; /* Radius sudut border */
    overflow: hidden; /* Menyembunyikan bagian card yang melebihi batas */
    margin-bottom: 20px; /* Jarak antar card */
    background-color: #fff; /* Warna latar belakang card */
    transition: border-color 0.3s ease; /* Transisi saat hover */
}

.card:hover {
    border-color: #2e4154; /* Warna border saat card di-hover */
}

/* CSS untuk gambar dalam card */
.card-img {
    overflow: hidden; /* Menyembunyikan bagian gambar yang melebihi batas */
}

.card-img img {
    width: 100%; /* Lebar gambar 100% dari container */
    height: 170px; /* Tinggi gambar tetap 170px */
    object-fit: cover; /* Memastikan gambar mengisi area yang ditentukan tanpa distorsi */
}

/* CSS untuk kategori dan judul */
.card-category {
    font-size: 14px; /* Ukuran font kategori */
    color: #555; /* Warna teks kategori */
    margin-bottom: 10px; /* Jarak bawah kategori */
}

.card-title a {
    color: #333; /* Warna teks link */
    text-decoration: none; /* Menghapus garis bawah pada link */
    font-size: 18px; /* Ukuran font judul */
}

.card-title a:hover {
    color: #1c1c22; /* Warna teks link saat hover */
}

/* CSS untuk meta informasi */
.card-meta {
    font-size: 14px; /* Ukuran font meta informasi */
    color: #777; /* Warna teks meta informasi */
}

.card-author {
    margin-right: 10px; /* Jarak kanan antara penulis dan tanggal */
}
    </style>
@endsection
