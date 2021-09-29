
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
  </section>
  
  <!-- ======= HEADER ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo me-auto"><img  src="<?=base_url('asset/img/logo.png');?>" alt="">
    <span>PENGMAS</span></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#halamanawal">BERANDA</a></li>
          <li><a class="nav-link scrollto" href="#tentangcimahi">TENTANG KAMI</a></li>
          <li><a class="nav-link scrollto" href="#pengaduan">PENGADUAN</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">INFO KECAMATAN CIMAHI SELATAN</a></li>
                 </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= judul jumbotron ======= -->
  <section id="halamanawal" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat <span>Datang</span></h1>
      <h2>Layanan Pengaduan Masyarakat Kecamatan Cimahi Selatan</h2>
      <div class="d-flex">
        <a href="http://youtube.com/watch?v=wmzjKcIgPDI" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tonton</span></a>
      </div>
    </div>
  </section>
  <!-- End jumbotron -->
      <!-- ======= pengaduan ======= -->
      <section id="pengaduan" class="pengaduan">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pengaduan Masyarakat</h2>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><a href="<?=base_url('user/formpengaduan');?>"><i class="bi bi-journals"></i></div>
              <h4>PENGADUAN MASYARAKAT</a></h4>
              <p>Klik disini untuk menyampaikan pengaduan anda ke kecamatan cimahi selatan</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End pengaduan -->


    <!-- ======= tentang cimahi ======= -->
    <section id="tentangcimahi" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TENTANG KOTA CIMAHI</h2>
          <!-- <h3>Kota Cimahi</h3> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="<?=base_url('asset/img/logo.png')?>" class="img-fluid" alt="">
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
                  <p>o	Meningkatkan sarana perekonomian dan lapangan kerja <br>
                    o	Meningkatkan kualitas pendidikan dan Kesehatan<br>
                    o	Meningkatkan penataan dan penegakan hukum<br>
                    o	Meningkatkan infrastruktur kota <br>
                    o	Mengendalikan pembangunan agar berwawasan lingkungan <br>
                    o	Meningkatkan kemitraan dengan dunia usaha<br>
                    </p>
                </div>
              </li>
            </ul>
            <h5>Slogan</h5>
            <p>
              Saluyu Ngawangun Jati Mandiri , yang artinya memiliki pengertian berjalan harmonis serasi dengan selaras, bahu membahu dalam membangun citra diri yang mandiri dalam kemajuan
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- End tentang kami-->

    <main id="main">
    <section  class="pengaduan">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kegiatan yang telah dilaksanakan oleh kecamatan Cimahi Selatan</h2>
        </div>

        <div class="row">
          <div class="col-lg-9 col-lg-9 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><a href="<?=base_url('admin/kegiatantelahdilaksanakan');?>"><i class="bi bi-card-checklist"></i></div>
              <p><b>Klik disini</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="pengaduan" class="pengaduan">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kegiatan yang akan dilaksanakan oleh kecamatan Cimahi Selatan</h2>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><a href="<?=base_url('admin/kegiatanakandilaksanakan');?>"><i class="bi bi-journal"></i></div>
              <p><b>Klik disini</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End kegiatan-->


        <!-- ======= laporan ======= -->
        <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row" id="hitungan">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <i class="bi bi-megaphone-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$count;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Laporan Sekarang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sekretariat</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Info cimahi ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Info Kecamatan Cimahi Selatan</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?=base_url('asset/img/portfolio/cimahi1.jpeg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>PPKM PAKAH AKAN DI PERPANJANG ?</h4>
              <a href="<?=base_url('asset/img/portfolio/portfolio-1.jpg')?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PPKM PAKAH AKAN DI PERPANJANG ?"></i></a>
              <a href="<?=base_url('welcome/PPKM')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?=base_url('asset/img/portfolio/vaksinasi.jpeg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vaksinasi warga cimahi</h4>
              <a href="<?=base_url('asset/img/portfolio/vaksinasi.jpeg')?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Vaksinasi warga cimahi"></i></a>
              <a href="<?=base_url('welcome/vaksinasi')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?=base_url('asset/img/portfolio/ginting.jpeg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Perjuangan Ginting</h4>
              <a href="<?=base_url('asset/img/portfolio/ginting.jpeg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perjuangan Ginting demi indonesia"></i></a>
              <a href="<?=base_url('welcome/ginting')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?=base_url('asset/img/portfolio/sd.jpeg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Antusias Vaksinasi SD Di cimahi</h4>
              <a href="<?=base_url('asset/img/portfolio/sd.jpeg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Antusias Vaksinasi SD Di cimahi"></i></a>
              <a href="<?=base_url('welcome/antusias')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?=base_url('asset/img/portfolio/kebakaran.jpeg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kebakaran di kalidam</h4>
              <a href="<?=base_url('asset/img/portfolio/kebakaran.jpeg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kebakaran di kalidam"></i></a>
              <a href="<?=base_url('welcome/kebakaran')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?=base_url('asset/img/portfolio/geliat.jpeg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Geliat warga cimahi dalam berolahraga</h4>
              <a href="<?=base_url('asset/img/portfolio/geliat.jpeg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Geliat warga cimahi dalam berolahraga"></i></a>
              <a href="<?=base_url('welcome/geliat')?>" class="details-link" title=""><i class="bx bx-link"></i></a> 
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?=base_url('asset/img/portfolio/tracer.jpeg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pemkot Cimahi terjunkan 1.700 relawan tracer Covid 19</h4>
              <a href="<?=base_url('asset/img/portfolio/tracer.jpeg')?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pemkot Cimahi terjunkan 1.700 relawan tracer Covid 19"></i></a>
              <a href="<?=base_url('welcome/tracer')?>" class="details-link" title=""><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

 
