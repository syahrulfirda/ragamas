<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

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
             <div class="row">
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informasi kecamatan cimahi selatan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                                            <th >No</th>
                                            <th >Judul Berita</th>
                                            <th >Gambar</th>
                                            <th >Isi Berita</th>
                                            <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                                            <th >No</th>
                                            <th >Judul Berita</th>
                                            <th >Gambar</th>
                                            <th >Isi Berita</th>
                                            <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        $no =1;
                        foreach ($info as $mhs ):?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $mhs['judul_berita']?></td>
                        <td>
                                                <img src="<?=base_url('asset/img/gambarberita/');?><?php echo $mhs['gambar']?>" width="90" height="70" alt="">
                        </td>
                        <td>
                                                <?php echo $mhs['isi_berita']?>
                        </td>
                        <td>                  
                                   <a href="<?=base_url('admin/hapusinfo/' . $mhs['id']);?>" class=" btn btn-danger d-inline" onclick="return confirm('apakah ada yakin akan menghapusnya ?');"> 
                                     <i class="fas fa-trash-alt"></i></a>
                                         
                         </td>
                    </tr>
                    <?php endforeach;?>    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

