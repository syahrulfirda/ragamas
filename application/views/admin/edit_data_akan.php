  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
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
                                                                    <h1 class="h4 text-gray-900 mb-4">Edit Data Kegiatan yang telah dilaksanakan</h1>
                                                                </div>
    
	<?php foreach($kegiatan as $mhs){ ?>
        <?=form_open_multipart('admin/update');?>
		<table>
			<tr>
                <div class="form-group">
                  <input type="hidden"  id="id"  name="kegiatan"  value="<?=$mhs->id?>" required>
                  <input type="text" class="form-control form-control-user" id="kegiatan" placeholder="Nama Kegiatan" name="kegiatan"  value="<?=$mhs->nama_kegiatan?>" required>
                </div>
			</tr>
			<tr>
            <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="tempat" placeholder="Tempat" name="tempat"  value="<?=$mhs->tempat?>" required>
             </div>
			</tr>
			<tr>
            <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="firstdate" placeholder="Dari Tanggal Dimulai" name="firstdate"  value="<?=$mhs->dari_tanggal?>" required>
            </div>
			</tr>
			<tr>
            <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="enddate" placeholder="Sampai Tanggal" name="enddate"  value="<?=$mhs->sampai_tanggal?>" required>
            </div>
			</tr>
			<tr>
				
            <button type="submit" class="btn btn-primary btn-user btn-block" ><i class="fas fa-closed-captioning"></i>
                                                                       Submit
             </button>
            
			</tr>
		</table>
        <?=form_close();?>
	<?php } ?>
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
</body>
</html>