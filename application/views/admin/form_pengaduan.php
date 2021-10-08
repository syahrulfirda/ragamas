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
                      <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle"  id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['name']?></span>
                    </a>
                </li>
                </nav>
                
             <!-- Begin Page Content -->
             <div class="container-fluid">
             <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah data pengaduan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Rencana Kegiatan KCS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count_akan;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah kegiatan Selesai KCS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count_telah;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah informasi KCS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count_info;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan Kecamatan Cimahi Selatan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                                            <th >No</th>
                                            <th >Nama</th>
                                            <th >Nik</th>
                                            <th >Kota</th>
                                            <th >kecamatan</th>
                                            <th >kelurahan</th>
                                            <th>Kontak</th>
                                            <th >Judul </th>
                                            <th >Detail Pengaduan</th>
                                            <th >Tanggal</th>
                                            <th >Bukti</th>
                                            <th>Hapus</th>
                                            <th>Cetak</th>
                                            <th> Balas Via WA</th>
                                            
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th >No</th>
                                            <th >Nama </th>
                                            <th >Nik</th>
                                            <th >Kota</th>
                                            <th >kecamatan</th>
                                            <th >kelurahan</th>
                                            <th >Kontak</th>
                                            <th >Judul</th>
                                            <th >Detail Pengaduan</th>
                                            <th >Tanggal</th>
                                            <th >Bukti   </th>
                                            <th> Hapus</th>
                                            <th> Cetak</th>
                                            <th> Balas Via WA</th>
                                        
                                           
                    </tr>
                </tfoot>
                <tbody>
                <?php
                                        $no =1;
                                        foreach ($formpengaduan as $mhs ):?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $mhs['nama_pelopor']?></td>
                        <td><?php echo $mhs['nik']?></td>
                        <td><?php echo $mhs['kota']?></td>
                        <td><?php echo $mhs['kecamatan']?></td>
                        <td><?php echo $mhs['kelurahan']?></td>
                        <td><?php echo $mhs['kontak_pelopor']?></td>
                        <td><?php echo $mhs['judul_laporan']?></td>
                        <td><?php echo $mhs['detail_pengaduan']?></td>
                        <td><?php echo $mhs['tanggal']?></td>
                        <td >
                                                
                                                <img src="<?=base_url('asset/img/bukti/');?><?php echo $mhs['bukti']?>" width="90" height="70" alt="">
                        </td>
                        <td> 
                                           
                                            <a href="<?=base_url('C_pengaduan/del/' . $mhs['id']);?>" class=" btn btn-danger d-inline" onclick="return confirm('apakah ada yakin akan menghapusnya ?');"> 
                                            <i class="fas fa-trash-alt"></i></a>
                                         
                         </td>
                         <td>
                                           
                                               <a href="<?=base_url('C_pengaduan/print/'. $mhs['id']);?>" class=" btn btn-xs btn-primary d-inline"> 
                                               <i class="fas fa-print"></i></a> <br>
                         </td>
                         <td>
                                               <a href="whatsapp://send?text=Terima kasih atas laporan pengaduannya.
                                                            .
                                                        
                                                        *Yth* Nama Pelopor <?php echo $mhs['nama_pelopor']?> dengan Nik <?php echo $mhs['nik']?> mengenai <?php echo $mhs['judul_laporan']?>
                                                        dengan ini melaporkan pengaduan dengan isi *<?php echo $mhs['detail_pengaduan']?>* dengan ini saya membuat laporan pengaduan pada tanggal <?php echo $mhs['tanggal']?>.
                                                        *Balasan dari Kami*
                                                        
                                                    

                                                        &phone=+62<?php echo $mhs['kontak_pelopor']?>" class=" btn btn-xs btn-primary d-inline"> 
                                               <i class="fab fa-whatsapp-square"></i></a>
                                              
                                            </td>              
                      
                                       
                                            
                                        
                    </tr>
                    
                    <?php endforeach;?>    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

    </div>
</div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
