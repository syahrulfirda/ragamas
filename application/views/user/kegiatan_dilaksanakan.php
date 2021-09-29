<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$title;?></title>
    <!-- Custom fonts for this template -->
    <link href="<?=base_url('asset/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url('asset/');?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url('asset/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?=base_url('asset/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('asset/css/style.css')?>" rel="stylesheet">
</head>
<style>
table{
    table-layout: fixed;
    width: 450px;
    word-wrap: break-word;
    border: 2px solid black;
    border-collapse: collapse;
}
table{
    table-layout: fixed;
    width: 450px;
    word-wrap: break-word;
    border: 2px solid black;
    border-collapse: collapse;
}

</style>

<body id="page-top">
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
                                         <li><a href="<?=base_url('welcome')?>">BERANDA</a></li>
                                        <li><a>KEGIATAN YANG TELAH DILAKSANAKAN OLEH KECAMATAN CIMAHI SELATAN</a></li>
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
                        <div class="card-header py-3">
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <center>
                                        <h1 class="h3 mb-2 text-gray-800">Kegiatan yang telah di laksanakan</h1>
                                        <p class="mb-4">Berikut adalah kegiatan-kegiatan yang telah diselenggarakan oleh kecamatan cimahi selatan </p>
                                 </center>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama kegiatan</th>
                                            <th>tempat</th>
                                            <th> Dari Tanggal</th>
                                            <th> Sampai Tanggal</th>
                                            <th> keterangan</th>
                                        </tr>           
                                        <?php
                                        $no =1;
                                        foreach ($telah as $mhs ):?>       
                                        <tr>
                                        <td><?php echo $no++?>
                                            <td><?php echo $mhs['nama_kegiatan']?></td>
                                            <td><?php echo $mhs['tempat']?></td>
                                            <td><?php echo $mhs['dari_tanggal']?></td>
                                            <td><?php echo $mhs['sampai_tanggal']?></td>
                                            <td><?php echo $mhs['keterangan']?></td>
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
    <!-- End of Page Wrapper -->    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('asset/');?>vendor1/jquery/jquery.min.js"></script>
    <script src="<?=base_url('asset/');?>vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets');?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('asset/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('asset/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('asset/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('asset/');?>js/demo/datatables-demo.js"></script>

</body>
</html>