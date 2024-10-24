@extends('beranda.master')
@section('master')
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
          <div class="col-xl-6 col-lg-8">
              <h1>SMKS TARUNA MANDIRI SRONO<span>.</span></h1>
              <h2>JL Raya Pekulo No.34,SRONO</h2>
          </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          <div class="col-xl-2 col-md-4">
              <div class="icon-box">
                  <i class="ri-book-line"></i>
                  <h3><a href="{{ url('/saran') }}">saran</a></h3>
              </div>
          </div>

          <div class="col-xl-2 col-md-4">
              <div class="icon-box">
                  <i class="ri-camera-line"></i>
                  <h3><a href="">Dokumentasi</a></h3>
              </div>
          </div>

          <div class="col-xl-2 col-md-4">
              <div class="icon-box">
                  <i class="ri-contacts-line"></i>
                  <h3><a href="">OSIS</a></h3>
              </div>
          </div>
      </div>

  </div>
</section><!-- End Hero -->
<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

          <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                  <img src="assets/img/about.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                  <h3>SMKS TARUNA MANDIRI SRONO.</h3>
                  <p class="fst-italic">
                      SMK Taruna Mandiri Srono adalah sebuah lembaga sekolah SMK swasta yang beralamat di Jl. Raya Pekulo No. 34 Srono, Kab. Banyuwangi.SMK swasta ini didirikan pertama kali pada tahun 2000. Saat ini SMK Taruna Mandiri Srono memakai panduan kurikulum belajar SMK 2013 dan Kurikulum Merdeka SMK Taruna Mandiri Srono memiliki sosok kepala sekolah yang bernama Yuli Siswa Wardaya dan operator sekolah Muhammad Asadi.
                      Akreditasi SMK Taruna Mandiri Srono
                      SMK Taruna Mandiri Srono memiliki akreditasi grade B dengan nilai 82 (akreditasi tahun 2018) dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah
                  </p>
                  <p class="fst-italic">
                      Memiliki 2 jurusan sebagai berikut:
                  </p>
                  <ul>
                      <li><i class="ri-check-double-line"></i>Teknik Kendaraan Ringan(TKR)</li>
                      <li><i class="ri-check-double-line"></i>Teknik Komputer Jaringan(TKJ)</li>
                  </ul>

              </div>
          </div>

      </div>
  </section><!-- End About Section -->



  <!-- ======= Ekskul ======= -->
  <section id="services" class="services">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Fasilitas </h2>
              <p>Fasilitas sekolah</p>
          </div>

          <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bxl-dribbble"></i></div>
                      <h4><a href="">Lapangan Olah raga</a></h4>
                      <p>Lapangan Olahraga Merupakan lapangan yang memiliki akses siswa dalam mengembangkan minat dan bakat di luar kemampuan akademiknya</p>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bxs-car-mechanic"></i></div>
                      <h4><a>Bengkel Praktek</a></h4>
                      <p>Bengkel Praktek merupakan bengkel yang digunakan sebagai tempat jurusan TKR dalam melakukan kegiatan belajar dalam bentuk Praktek </p>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bxs-keyboard"></i></div>
                      <h4><a href="">Laboratorium Komputer</a></h4>
                      <p>Laboratorium Komputer merupakan Laboratorium yang digunakan sebagai tempat jurusan TKJ dalam melakukan kegiatan belajar dalam bentuk Prakte</p>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-clinic"></i></div>
                      <h4><a href="">UKS</a></h4>
                      <p>UKS (Unit Kesehatan Sekolah)Merupakan unit kesehatan yang ada di sekolah yang digunakan oleh seluruh warga yang ada di sekolah ketikar terjadi maslah kesehatan dan lain lain</p>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-wifi"></i></div>
                      <h4><a href="">Free Wifi</a></h4>
                      <p>Smk Taruna Mandiri juga Menyediakan Wifi gratis yang dapat di gunakan oleh sisiwa dalam mmengakses internet</p>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-arch"></i></div>
                      <h4><a href="">Sarana kesenian</a></h4>
                      <p>Sarana kesenianini di peruntukan untuk siswa yang memiliki minat dalam bidang kesenian dan digunakan dalam penyalur bakat siswa Smk taruna mandiri</p>
                  </div>
              </div>

          </div>

      </div>
  </section><!-- End Services Section -->



  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Portfolio</h2>
              <p>Check our Portfolio</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>

                  </ul>
              </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>App 1</h4>
                          <p>App</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Web 3</h4>
                          <p>Web</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>App 2</h4>
                          <p>App</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>

                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto4.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Card 2</h4>
                          <p>Card</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>

                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto5.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Web 2</h4>
                          <p>Web</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>

                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto6.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>App 3</h4>
                          <p>App</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>

                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto7.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Card 1</h4>
                          <p>Card</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>

                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto8.jpeg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Card 3</h4>
                          <p>Card</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/foto.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                      <img src="assets/img/portfolio/foto9.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>Web 3</h4>
                          <p>Web</p>
                          <div class="portfolio-links">
                              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </section><!-- End Portfolio Section -->

  </section><!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Nama</h2>
              <p>Guru</p>
          </div>

          <div class="row">

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                      <div class="member-img">
                          <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                          <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4>Drs Yuli Siswa wardhaya</h4>
                          <span>Kepala Sekolah</span>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="200">
                      <div class="member-img">
                          <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                          <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4>Elya Jamil M,pd</h4>
                          <span>Kesiswaan</span>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                      <div class="member-img">
                          <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                          <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4>Nanan hermanto</h4>
                          <span>Pembina Osis</span>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="400">
                      <div class="member-img">
                          <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                          <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4>Puput dini</h4>
                          <span>Kepala Kurikulm</span>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Kontak</h2>
              <p>Kontak dan saran</p>
          </div>

          <div>
              <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.002413388633!2d114.25849127501161!3d-8.401421791636972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3fdd98d5e4967%3A0x2992c8a7d540c110!2sSMK%20TARUNA%20MANDIRI%20SRONO!5e0!3m2!1sid!2sid!4v1717328740611!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
          </div>

          <div class="row mt-5">


              <div class="col-lg-4">
                  <div class="info">
                      <div class="address">
                          <i class="bi bi-geo-alt"></i>
                          <h4>Location:</h4>
                          <p>JL. RAYA PEKULO NO. 34 SRONO, Kebaman, Kec. Srono, Kab. Banyuwangi Prov. Jawa Timur</p>
                      </div>

                      <div class="email">
                          <i class="bi bi-envelope"></i>
                          <h4>Email:</h4>
                          <p>smktarunamandirisrono@gmail.com.com</p>
                      </div>

                      <div class="phone">
                          <i class="bi bi-phone"></i>
                          <h4>Call:</h4>
                          <p>+62 821-4035-4765</p>
                      </div>

                  </div>

              </div>

              <div class="col-lg-8 mt-5 mt-lg-0">


                  <div class="section-title">
                      <h2>Saran</h2>
                      <p>Saran</p>
                  </div>
                  <form action="{{ route('saran.create') }}" method="POST" class="php-email-form">
                      @csrf
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                          </div>
                      </div>
                      <div class="form-group mt-3">

                          <select type="text" class="form-control" name="tipe" id="subject" placeholder="Subject" required>
                              <option value="">Pilih Data</option>
                              <option value="siswa">siswa</option>
                              <option value="alumni">alumni</option>
                              <option value="umum">umum</option>
                          </select>
                      </div>
                      <div class="form-group mt-3">
                          <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center">
                          <button type="submit" name="submit">Kirim</button>
                      </div>
                  </form>

              </div>

          </div>

      </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection

