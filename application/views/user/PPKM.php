
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <i class="glyphicon glyphicon-exclamation-sign"><a href="#">Jl. Baros No.14, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40533</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(022) 6629676</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/kec.cimsel?utm_medium=copy_link" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo me-auto"><img  src="<?=base_url('asset/img/logo.png');?>" alt="">
    <span>PENGMAS</span></a>
      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Info Cimahi</h2>
          <ol>
            <li><a href="<?=base_url('welcome/index')?>">Beranda</a></li>
            <li>Info cimahi selatan</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= isi berita info cimsel ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
      <?php
      foreach ($info as $mhs ):?>
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
                <div class="swiper-slide">
                <img src="<?=base_url('asset/img/gambarberita/');?><?php echo $mhs['gambar']?>">
                </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2><?php echo $mhs['judul_berita']?></h2>
              <p style="word-wrap: break-word;"> 
              <?php echo $mhs['isi_berita']?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>  
    </section>
    <!-- End  -->

  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>