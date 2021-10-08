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
                                <h1 class="h4 text-gray-900 mb-4">Form tambah informasi cimahi selatan</h1>
                            </div>
                            <?=$this->session->flashdata('message');?>
                            <?=form_open_multipart('admin/infocimahi_tambah')?>
                        
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="email" aria-describedby="emailHelp"
                                        placeholder="Judul berita" name="judul_berita" value="<?=set_value('judul_berita');?>" required>
                                </div>
                                <label for="">Upload file berita</label>
                                        <div class="value">
                                             <input  type="file" name="gambar" id="gambar" required>
                                        </div>
                                           
                            <br>
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="text" placeholder="Isi Berita" name="isi_berita" value="<?=set_value('isi_berita');?>" maxlength="1500" required>
                               </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Kirim
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

