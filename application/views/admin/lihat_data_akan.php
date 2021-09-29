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
    <link href="<?=base_url('asset/css/style.css')?>" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?=base_url('asset/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<style>
table{
    table-layout: fixed;
    width: 450px;
    word-wrap: break-word;
    border: 2px solid black;
    border-collapse: collapse;
}

</style>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['name']?></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <center>
                    <h1 class="h3 mb-2 text-gray-800">Kegiatan yang akan di laksanakan Kecamatan Cimahi Selatan</h1>
                    <p class="mb-4">Berikut adalah kegiatan-kegiatan yang akan diselenggarakan oleh kecamatan cimahi selatan </p>
                    </center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama kegiatan</th>
                                            <th>tempat</th>
                                            <th> Dari Tanggal</th>
                                            <th> Sampai Tanggal</th>
                                            <th colspan="2"> Aksi</th>
                                        </tr>       
                                        <?php
                                        $no =1;
                                        foreach ($kegiatan as $mhs ):?>       
                                        <tr>
                                        <td><?php echo $no++?></td>
                                            <td><?php echo $mhs['nama_kegiatan']?></td>
                                            <td><?php echo $mhs['tempat']?></td>
                                            <td><?php echo $mhs['dari_tanggal']?></td>
                                            <td><?php echo $mhs['sampai_tanggal']?></td>
                                            <td>            
                                             
                                                <a href="<?=base_url('admin/delakan/' . $mhs['id']);?>" class=" btn btn-danger " onclick="return confirm('apakah ada yakin akan menghapusnya ?');"> 
                                                <i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            
                                       
                                        <td>
                                                <a href="<?=base_url('admin/edit/' . $mhs['id']);?>" class=" btn btn-primary  "> 
                                                <i class="fas fa-pen-square"></i></a>
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
    <script src="<?=base_url('asset/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('asset/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('asset/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('asset/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('asset/');?>js/demo/datatables-demo.js"></script>
    
</body>

</html>