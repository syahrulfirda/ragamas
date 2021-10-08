<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    <?=$title;?>
    </title>

    <!-- Custom fonts for this template -->
    <link href="<?=base_url('asset/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url('asset/');?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('asset/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=base_url('asset/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style>
    @media print{
        
        .navbar-nav,  
        .btn,
        th:nth-child(11),td:nth-child(11)
        th:nth-child(12),td:nth-child(12)
        th:nth-child(13),td:nth-child(13)
        th:nth-child(14),td:nth-child(14)
        {
            display: none;
        }
    }
    table{
    table-layout: fixed;
  
    word-wrap: break-word;
    overflow: hidden;
}
    </style>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-users-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PENGMAS </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <div class="sidebar-heading">
     Pengaduan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('C_pengaduan');?>">
        <i class="fas fa-fw fa-table"></i>
            <span>Pengaduan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kegiatan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span> Kegiatan rencana</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kegiatan rencana:</h6>
                <a class="collapse-item" href="<?=base_url('admin/form_tambah_kegiatan_akan');?>">Tambah data kegiatan</a>
                <a class="collapse-item" href="<?=base_url('admin/kegiatanakandilaksanakanadmin');?>">Lihat data kegiatan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kegiatan telah selesai</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kegiatan telah selesai</h6>
                <a class="collapse-item" href="<?=base_url('admin/form_tambah_kegiatan_telah');?>">Tambah data kegiatan</a>
                <a class="collapse-item" href="<?=base_url('admin/kegiatantelahdilaksanakanadmin');?>">lihat data kegiatan</a>
            </div>
        </div>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    
    <div class="sidebar-heading">
    Info cimahi
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Info cimahi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info cimahi</h6>
                <a class="collapse-item" href="<?=base_url('admin/infocimahi');?>">Tambah data info KCS</a>
                <a class="collapse-item" href="<?=base_url('admin/lihat_info');?>">lihat data info cimsel</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
     Panduan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/panduan_admin');?>">
        <i class="fas fa-fw fa-book"></i>
            <span>Panduan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
     Akun
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/ganti_password');?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Ganti password</span></a>
    </li>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Logout
                                </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin untuk keluar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pilih Logout Jika ingin Keluar halaman
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="<?=base_url('auth/logout');?>">Logout</a>
                </div>
                </div>
            </div>
            </div>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->


           

      