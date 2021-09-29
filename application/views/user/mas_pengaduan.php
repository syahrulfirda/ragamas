<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title><?=$title;?></title>

    <!-- Font special for pages-->
    
    <link href="<?=base_url('asset/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');?>" rel="stylesheet">

    <!-- Main CSS-->
 
    <link href="<?=base_url('asset/');?>css/main.css" rel="stylesheet" media="all">
    <link href="<?=base_url('asset/');?>css/sb-admin-2.min.css" rel="stylesheet">
 
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Lapor Pengaduan Anda!</h2>
                </div>
                <div class="card-body">

                    <!-- <form method="POST" action="<?=base_url().'C_pengaduan/tambah_aksi';?>"> -->
                    <?=$this->session->flashdata('message');?>
                    <?=form_open_multipart('C_pengaduan/tambah_aksi')?>
                        <div class="form-row">
                            <div class="name">Nama Pelapor</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama" autofocus  placeholder="Isi nama anda" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">NIK Anda</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nik" autofocus  placeholder="Nik Anda" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" title="Harus sesuai format.Contoh XXXX-XXXX-XXXX-XXXX" required>
                                <small id="emailHelp" class="form-text text-muted">Contoh : XXXX-XXXX-XXXX-XXXX</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Kategori Pengaduan</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="input--style-6" required>
                                       
                                        <select name="judul" required>
                                            <!-- <option disabled="disabled" selected="selected" >Pilih Kategori Laporan Anda</option> -->
                                            <option>Pilihan Lainnya</option>
                                            <option>Pelayanan Kartu Tanda Penduduk</option>
                                            <option>Pelayanan Kartu Keluarga</option>
                                            <option>Pelayanan Surat Keterangan Pindah</option>
                                            <option>Pelayanan Surat Keterangan Susunan Ahli Waris</option>
                                            <option>Pelayanan Surat Keterangan Susunan Keluarga Untuk Ke Taspen</option>
                                            <option>Pelayanan Surat Keterangan Menetap Untuk Pensiun</option>
                                            <option>Pelayanan Surat Keterangan Belum Menikah</option>
                                            <option>Pelayanan Surat Keterangan Janda/Duda</option>
                                            <option>Pelayanan Surat Keterangan Usaha(SKU) Untuk Ke Bank</option>
                                            <option>Pelayanan Surat Keterangan Akta Kelahiran Dewasa </option>
                                            <option>Pelayanan Surat Keterangan Domisili WNA Persyaratan KITAS</option>
                                            <option>Pelayanan Surat Keterangan Perbedaan Penulisan Elemen Data Pembuatan Password</option>
                                            <option>Pelayanan Surat Keterangan Pendaftaran TNI,POLRI</option>
                                            <option>Pelayanan Surat Keterangan Menikah Dengan Anggota TNI,POLRI</option>
                                            <option>Pelayanan Surat Keterangan Tidak Mampu(SKTM)</option>
                                            <option>Pelayanan Surat Keterangan Domisili Haji</option>
                                            <option>Pelayanan Surat Keterangan Catatan Kepolisian(SKCK)</option>
                                            <option>Pelayanan Surat Keterangan Domisili Perusahaan</option>
                                            <option>Pelayanan Ijin Usaha Menengah(IUM) </option>
                                            <option>Pelayanan Surat Keterangan Ijin Mendirikan Bangunan(IMB)</option>
                                            <option>Pelayanan Surat Rekomendasi Yayasan(Pendidikan,Sosial,Keagamaan) </option>
                                            <option>Pelayanan Surat Rekomendasi Domisili Partai Politik </option>
                                        </select>

                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Sampaikan Pengaduan Anda</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="detail" placeholder="Silahkan isi detail Laporan Pengaduan Anda" maxlength="300" break></textarea>
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Tanggal Melapor</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="tanggal">

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kontak Pelopor</div>
                            <div class="value">
                            <div class="input-group">
                            <input class="input--style-6" type="number" name="kontak"  value="62" style="width: 100px;" readonly > 
                             <input class="input--style-6" type="tel" name="kontak" pattern="[1-9]{3}[0-9]{4}[0-9]{4}" style="width: 200px;" required title="Format Penulisan Contoh 8531234xxxx tanpa (0)"  maxlength="11"> 
                                 
                        </div>
                          
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tempat Tinggal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="tempat" placeholder="tempat tinggal anda sesuai KTP">
                                    <small id="emailHelp" class="form-text text-muted">Harus sesuai KTP</small>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Upload File</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input  type="file" name="bukti" id="bukti" >
                                    <small  class="form-text text-muted">Upload File Harus di isi</small>
                                </div>
                                <!-- <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div> -->
                            </div>
                        </div> 
                 
              
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Kirim</button>
                    <a class="btn btn--radius-2 btn--blue-2" href="<?=base_url('welcome')?>">Kembali</a>
                </div>
           
                <?=form_close();?>
            </div>
           
        </div>
        
    </div>

    <!-- Jquery JS-->
    <script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="<?=base_url('assets/');?>js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->