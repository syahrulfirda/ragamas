        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                  <div class="container">
                                    <!-- Outer Row -->
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="card o-hidden border-0 shadow-lg my-5">
                                                <div class="card-body p-0">
                                                    <!-- Nested Row within Card Body -->
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <div class="p-5">
                                                                <div class="text-center">
                                                                    <h1 class="h4 text-gray-900 mb-4">Input Kegiatan telah selesai</h1>
                                                                </div>
                                                                <?=$this->session->flashdata('message');?>
                                                                <?=form_open_multipart('admin/tambah_kegiatan_telah_aksi')?>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control form-control-user"
                                                                            id="email" aria-describedby="emailHelp"
                                                                            placeholder="Nama kegiatan" name="kegiatan" value="<?=set_value('kegiatan');?>" required>
                                                                           
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control form-control-user"
                                                                            id="lokasi" placeholder="Tempat" name="lokasi"required>
                                                                          
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="date" class="form-control form-control-user"
                                                                            id="firstdate" placeholder="Dari Tanggal" name="firstdate"required>
                                                                            <small id="emailHelp" class="form-text text-muted">Sampai Tanggal Kegiatan</small>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="date" class="form-control form-control-user"
                                                                            id="enddate" placeholder="Sampai Tanggal" name="endate"required>
                                                                            <small id="emailHelp" class="form-text text-muted">Akhir Tanggal Kegiatan</small>
                                                                            
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control form-control-user"
                                                                            id="keterangan" placeholder="keterangan" name="ket" required>
                                                                            <small id="emailHelp" class="form-text text-muted">Keterangan Acara </small>
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                       Submit
                                                                    </button>
                                                                    <?=form_close();?>
                                                                    <hr>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
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
