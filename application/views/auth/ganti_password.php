<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
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
<div class="container-fluid">


<div class="row">
    <div class="col-lg-6">   
        <?=$this->session->flashdata('message');?>
<form action="<?=base_url('auth/ganti_password');?>" method="post">
  <div class="form-group">
    <label for="current_password">Password Saat Ini</label>
    <input type="password" class="form-control" id="gantipassword" name="gantipassword">
    <?=form_error('gantipassword',' <small class="text-danger pl-3">','</small> ');?>
  </div>
  <div class="form-group">
    <label for="new_password1">Password Terbaru</label>
    <input type="password" class="form-control" id="gantipassword1" name="gantipassword1">
    <?=form_error('gantipassword1',' <small class="text-danger pl-3">','</small> ');?>
  </div>
  <div class="form-group">
    <label for="new_password1">Ulangi Password Terbaru</label>
    <input type="password" class="form-control" id="gantipassword2" name="gantipassword2">
    <?=form_error('gantipassword2',' <small class="text-danger pl-3">','</small> ');?>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Ganti Password</button>
  </div>
</form>


</div>
</div>
</div>