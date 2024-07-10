@extends('head')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center"> 
          <h1 data-aos="fade-up">Zakat <span>Maal</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">"Maal berasal dari kata bahasa Arab artinya harta atau kekayaan (al-amwal, jamak dari kata maal) adalah “segala hal yang diinginkan manusia untuk disimpan dan dimiliki” (Lisan ul-Arab). Menurut Islam sendiri, harta merupakan sesuatu yang boleh atau dapat dimiliki dan digunakan (dimanfaatkan) sesuai kebutuhannya."<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/bayar" class="btn-get-started">Bayar Zakat</a>
          </div>         
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p class="who-we-are">Zakat Maal</p><br>
                <p class="text">
                    Zakat maal berarti zakat yang dikenakan atas segala jenis harta, yang secara zat maupun substansi perolehannya tidak bertentangan dengan ketentuan agama.
                </p>
                <p class="text">
                    Sebagai contoh, zakat maal terdiri atas simpanan kekayaan seperti uang, emas, surat berharga, penghasilan profesi, aset perdagangan, hasil barang tambang atau hasil laut, hasil sewa aset dan lain sebagainya.                
                </p>
                <p class="text">
                    Sebagaimana yang dijelaskan oleh Syaikh Dr. Yusuf Al-Qardhawi dalam kitabnya Fiqh uz-Zakah, zakat maal meliputi:                
                </p>
                <ul style="margin-left: 5%;">
                    <li>
                        <p>1. Zakat simpanan emas, perak, dan barang berharga lainnya;</p>
                    </li>
                    <li>
                        <p>2. Zakat atas aset perdagangan;</p>
                    </li>
                    <li>
                        <p>3. Zakat atas hewan ternak;</p>
                    </li>
                    <li>
                        <p>4. Zakat atas hasil pertanian;</p>
                    </li>
                    <li>
                        <p>5. Zakat atas hasil olahan tanaman dan hewan;</p>
                    </li>
                    <li>
                        <p>6. Zakat atas hasil tambang dan tangkapan laut;</p>
                    </li>
                    <li>
                        <p>7. Zakat atas hasil penyewaan asset;</p>
                    </li>
                    <li>
                        <p>8. Zakat atas hasil jasa profesi;</p>
                    </li>
                    <li>
                        <p>9. Zakat atas hasil saham dan obligasi.</p>
                    </li>
                </ul>
                <p>
                    Begitupun dengan yang dijelaskan di dalam UU No. 23 Tahun 2011, zakat maal meliputi; 
                </p>
                <ul style="margin-left: 5%;">
                    <li>
                        <p>1. Emas, perak, dan logam mulia lainnya;</p>
                    </li>
                    <li>
                        <p>2. Uang dan surat berharga lainnya;</p>
                    </li>
                    <li>
                        <p>3. Perniagaan;</p>
                    </li>
                    <li>
                        <p>4. Pertanian, perkebunan, dan kehutanan;</p>
                    </li>
                    <li>
                        <p>5. Peternakan dan perikanan;</p>
                    </li>
                    <li>
                        <p>6. Pertambangan;</p>
                    </li>
                    <li>
                        <p>7. Perindustrian;</p>
                    </li>
                    <li>
                        <p>8. Pendapatan dan jasa; dan</p>
                    </li>
                    <li>
                        <p>9. Rikaz.</p>
                    </li>
                </ul>
                <p>
                    Adapun syarat harta yang terkena kewajiban zakat maal yaitu sebagai berikut:  
                </p>
                <ul style="margin-left: 5%;">
                    <li>
                        <p>1. Kepemilikan penuh</p>
                    </li>
                    <li>
                        <p>2. Harta halal dan diperoleh secara halal</p>
                    </li>
                    <li>
                        <p>3. Harta yang dapat berkembang atau diproduktifkan (dimanfaatkan)</p>
                    </li>
                    <li>
                        <p>4. Mencukupi nishab</p>
                    </li>
                    <li>
                        <p>5. Bebas dari hutang</p>
                    </li>
                    <li>
                        <p>6. Mencapai haul</p>
                    </li>
                    <li>
                        <p>7. Atau dapat ditunaikan saat panen</p>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                <div class="col-lg-12"><br><br>
                    <img src="https://baznas.go.id/assets/images/tentangzakat/zakat-mal-baznas.jpg" class="img-fluid" alt="">
                </div>

            </div>

        </div>

      </div>
    </section><!-- /About Section -->
@endsection
