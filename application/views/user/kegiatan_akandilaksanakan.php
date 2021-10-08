<!-- ======= HEADER ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo me-auto"><img  src="<?=base_url('asset/img/logo.png');?>" alt="">
    <span>PENGMAS</span></a>
      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                 <!-- breadcumbs -->
                 <section class="breadcrumbs">
                                    <div class="container">
                                     <div class="d-flex justify-content-between align-items-center">
                                      <ol>
                                            <li><a href="<?=base_url('welcome/index')?>">BERANDA</a></li>
                                            <li><a>KEGIATAN YANG AKAN DILAKSANAKAN OLEH KECAMATAN CIMAHI SELATAN</a></li>
                                        </ol>
                                        </div>
                                    </div>
                 </section>
    <!-- end breadcumbs -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <center>
                                    <h1 class="h3 mb-2 text-gray-800">Rencana kegiatan yang akan di laksanakan</h1>
                                    <p class="mb-4">Berikut adalah kegiatan-kegiatan yang akan diselenggarakan oleh kecamatan cimahi selatan </p>
                                </center>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama kegiatan</th>
                                            <th>tempat</th>
                                            <th> Dari Tanggal</th>
                                            <th> Sampai Tanggal</th>
                                        </tr>       
                                        <?php
                                        $no =1;
                                        foreach ($kegiatan as $mhs ):?>       
                                        <tr>
                                        <td><?php echo $no++?>
                                            <td><?php echo $mhs['nama_kegiatan']?></td>
                                            <td><?php echo $mhs['tempat']?></td>
                                            <td><?php echo $mhs['dari_tanggal']?></td>
                                            <td><?php echo $mhs['sampai_tanggal']?></td>
                                        </td> 
                                        </tr>          
                                        <?php endforeach;?>                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
 