  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="kec.cimsel@gmail.com">kec.cimsel@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(022) 6629676</span></i>
        <i class="bi bi-geo-fill ms-4"></i><span>Jl. Baros No.14, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40533</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/kec.cimsel?utm_medium=copy_link" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a class="logo me-auto"><img  src="<?=base_url('asset/img/logo.png');?>">
    <span>PENGMAS</span></a>
     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#featured-services">Pengaduan</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Info Cimahi Selatan</a></li>
          <li><a class="nav-link scrollto " href="<?=base_url('welcome/panduan');?>">Panduan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat<span> Datang</span></h1>
      <h2>Layanan Pengaduan Masyarakat Kecamatan Cimahi Selatan</h2>
      <div class="d-flex">
        <!-- <a href="" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>TONTON</span></a> -->
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= PENGADUAN MASYARAKAT ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="">
            <div class="icon-box" data-aos="fade-up" >
              <div class="icon"><a href="<?=base_url('welcome/formpengaduan');?>"><i class="bx bx-world"></i></div>
              <h4 class="title">Pengaduan Masyarakat</a></h4>
              <p class="description">Klik disini untuk menyampaikan pengaduan anda ke kecamatan cimahi selatan</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  -->

    <!-- ======= Tentang Kota Cimahi ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kota Cimahi</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="<?=base_url('asset/img/logo.png');?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Visi dan Misi dari Kota Cimahi.</h3>
            <p class="fst-italic">
            Pada suatu instansi baik swasta maupun pemerintahan pastinya memiliki suatu visi dan misi yang akan mengarahkan suatu instansi tersebut agar tidak 7 keluar dari jalur yang seharusnya. Begitupun pada instansi Pemerintahan di lingkungan Kota Cimahi. Berikut visi dan misi dari Kota Cimahi 
            </p>
            <ul>
              <li>
                <div>
                  <h5>Visi Kota Cimahi </h5>
                  <p>Dengan iman, taqwa, optimis dan cerdas jadikan Cimahi Kota maju, agamis, nyaman, tertib, aman dan produktif. </p>
                </div>
              </li>
              <li>
       
                <div>
                  <h5>Misi Kota Cimahi </h5>
                  <p>
                    o	Meningkatkan sarana perekonomian dan lapangan kerja <br>
                    o	Meningkatkan kualitas pendidikan dan Kesehatan<br>
                    o	Meningkatkan penataan dan penegakan hukum<br>
                    o	Meningkatkan infrastruktur kota <br>
                    o	Mengendalikan pembangunan agar berwawasan lingkungan <br>
                    o	Meningkatkan kemitraan dengan dunia usaha<br>
                  </p>
                </div>
              </li>
            </ul>
            <ul>
              <li>
                <div>
                  <h5>Slogan</h5>
                  <p>Saluyu Ngawangun Jati Mandiri , yang artinya memiliki pengertian berjalan harmonis serasi dengan selaras, bahu membahu dalam membangun citra diri yang mandiri dalam kemajuan </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End -->
    <!-- ======= JUMLAH ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$count_info;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah  informasi cimahi selatan</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$count_telah;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah  kegiatan telah  selesai KCS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$count_akan;?>"" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah  rencana kegiatan KCS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$count;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Laporan Sekarang</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End  -->


    <!-- ======= KEGIATAN======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kegiatan</h2>
        </div>

        <div class="row">
          <div class="" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-list"></i></div>
              <h4><a href="<?=base_url('welcome/kegiatan_akan_welcome');?>">Rencana Kegiatan KCS</a></h4>
              <p>Klik disini untuk melihat kegiatan yang akan kecamatan cimahi selatan</p>
            </div>
          </div>
<hr>
          <div class="" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4><a href="<?=base_url('welcome/kegiatan_telah_welcome');?>">KEGIATAN SELESAI KCS</a></h4>
              <p>Klik disini untuk melihat kegiatan yang telah selesai di  kecamatan cimahi selatan</p>
            </div>
          </div>

          

      </div>
    </section>
    <!-- End -->

          </div>
          <div class="swiper-pagination"></div>
          </div>

      </div>
    </section>
    <!-- ======= Info Kecamatan Cimahi Selatan ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Info Kecamatan Cimahi Selatan</h2>
      </div>
        <?php
     foreach ($info as $mhs ):?>   
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="<?=base_url('asset/img/gambarberita/');?><?php echo $mhs['gambar']?>" class="img-fluid" alt="">
            
            <div class="portfolio-info">
              <h4><?php echo $mhs['judul_berita']?></h4>
              <a href="<?=base_url('asset/img/portfolio/portfolio-1.jpg')?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PPKM PAKAH AKAN DI PERPANJANG ?"></i></a>
              <a href="<?=base_url('welcome/info/' .$mhs['id'])?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>
          <?php endforeach;?>     
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->
  <!-- END Info Kecamatan Cimahi Selatan -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>