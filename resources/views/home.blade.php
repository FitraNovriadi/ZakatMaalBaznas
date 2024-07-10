@extends('head')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">BAZNAS <span>PROVINSI JAMBI</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">"Menyentuh Hati, Mengubah Hidup"<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/bayar" class="btn-get-started">Bayar Zakat</a>
          </div>
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-wallet2"></i></div>
                    <div>
                    <h4 class="title"><a href="/" class="stretched-link">Zakat</a></h4>
                    <p class="description">Zakat adalah bagian tertentu dari harta yang wajib dikeluarkan oleh setiap muslim apabila telah mencapai syarat yang ditetapkan.</p>
                    </div>
                </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-cash-coin"></i></div>
                    <div>
                    <h4 class="title"><a href="/" class="stretched-link">Infak</a></h4>
                    <p class="description">infak adalah harta yang dikeluarkan oleh seseorang atau badan usaha di luar zakat untuk kemaslahatan umum.</p>
                    </div>
                </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-box2-heart"></i></div>
                    <div>
                    <h4 class="title"><a href="/" class="stretched-link">Sedekah</a></h4>
                    <p class="description">Menurut peraturan BAZNAS No.2 tahun 2016, sedekah adalah harta atau non harta yang dikeluarkan oleh seseorang atau badan usaha di luar zakat untuk kemaslahatan umum.</p>
                    </div>
                </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p class="who-we-are">Apa itu BAZNAS?</p><br>
                <h3>BAZNAS adalah lembaga resmi yang dibentuk oleh pemerintah Indonesia</h3><br>
                <p class="fst-italic">
                BAZNAS dibentuk untuk mengelola zakat, infak, dan sedekah secara nasional. BAZNAS berperan sebagai koordinator utama dalam pengelolaan zakat yang melibatkan berbagai lembaga amil zakat (LAZ) di seluruh Indonesia.
                </p>
                <p class="fst-italic">
                Sebagai lembaga yang amanah, BAZNAS memastikan seluruh proses pengumpulan, pendistribusian, dan pendayagunaan zakat dilakukan dengan transparan, akuntabel, dan tepat sasaran.
                </p>
            </div>

            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                <div class="col-lg-12"><br><br>
                    <img src="https://kotajambi.baznas.go.id/assets/images/profil/profil.jpeg" class="img-fluid" alt="">
                </div>

            </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Program Utama BAZNAS</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                    <i class="bi bi-backpack2 icon"></i>
                    <div>
                        <h3>Program Pendidikan</h3>
                        <p>Beasiswa, bantuan pendidikan, dan pengembangan keterampilan bagi anak-anak dan remaja dari keluarga kurang mampu.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                    <i class="bi bi-bandaid icon"></i>
                    <div>
                        <h3>Program Kesehatan</h3>
                        <p>Layanan kesehatan gratis, penyediaan fasilitas kesehatan, dan bantuan untuk penderita penyakit kronis.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                    <i class="bi bi-wallet icon"></i>
                    <div>
                        <h3>Program Ekonomi</h3>
                        <p>Pemberdayaan ekonomi mustahik melalui pelatihan keterampilan, modal usaha, dan pendampingan bisnis.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                    <i class="bi bi-gift icon"></i>
                    <div>
                        <h3>Program Sosial</h3>
                        <p>Bantuan kepada korban bencana alam, penyediaan kebutuhan dasar, dan pembangunan infrastruktur sosial.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                    <i class="bi bi-calendar4-week icon"></i>
                    <div>
                        <h3>Program Dakwah</h3>
                        <p>Penyebaran nilai-nilai Islam, pendidikan keagamaan, dan pengembangan masjid dan lembaga keagamaan.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Pekan Baru No.55, Rw. Sari, Kec. Kota Baru, Kota Jambi, Jambi 36361</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Kontak BAZNAS</h3>
                    <p>08117489991</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>baznasjambi@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.0553731663812!2d103.57711086964771!3d-1.6210804998977375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588e19e5ee58f%3A0x1af6e05bcf59b151!2sBAZNAS%20Provinsi%20Jambi!5e0!3m2!1sid!2sid!4v1720624252843!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
