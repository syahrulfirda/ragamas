
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
                                <h1 class="h4 text-gray-900 mb-4">LAPOR PENGADUAN ANDA !!</h1>
                            </div>
                            <?=$this->session->flashdata('message');?>
                            <?=form_open_multipart('C_pengaduan/tambah_aksi')?>
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="nama" placeholder="Nama Anda" name="nama" autofocus required>  
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="nik" placeholder="NIK ANDA" name="nik" pattern="[0-9]{16}" title="ISI NIK ANDA DENGAN BENAR!!" maxlength="16" required>
                                </div>

                                <div class="form-group">
                                <div class="form-floating">
                                    <select class="form-select form-control form-control-user" id="kota"  name="kota" required>
                                        <option >Kota Cimahi</option>
                                    </select>
                                    <label for="kota">Pilih Kota</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-floating">
                                    <select class="form-select form-control form-control-user" id="kecamatan"  name="kecamatan" required>
                                        <option >Cimahi Selatan</option>
                                    </select>
                                    <label for="kecamatan">Pilih Kecamatan</label>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <div class="form-floating">
                                    <select class="form-select form-control form-control-user" id="Kelurahan"  name="kelurahan" required>
                                        <option >Leuwigajah</option>
                                        <option >Cibeber</option>
                                        <option >Utama</option>
                                        <option >Melong</option>
                                        <option >Cibeureum</option>
                                    </select>
                                    <label for="kelurahan">Pilih Kelurahan</label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row g-1">
                                        <div class="col">
                                            <input type="text" class="form-control" value="+62"  style="width: 60px;" disabled>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="No Whatsapp Anda" 
                                            style="width: 580px;" name="kontak" pattern="[1-9]{3}[0-9]{4}[0-9]{4}" title="Tanpa Menggunakan 0(NOL)" required>
                                            <small>Contoh : 85314xxxxxx</small>
                                        </div>
                                    </div>
                                    </div>
                   
                                <div class="form-group">
                                    <div class="form-floating">
                                    <select class="form-select form-control form-control-user" id="judul"  name="judul" required>
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
                                    <label for="">Topik Pengaduan</label>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="form-floating">
                                    <textarea class="form-control " placeholder="SAMPAIKAN PENGADUAN ANDA DISINI!" id="detail" style="height: 100px" name="detail" maxlength="400" required></textarea>
                                    <label for="detail">Sampaikan Pengaduan Anda disini</label>
                                    </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="bukti" class="form-label">Upload Bukti Pengaduan</label>
                                        <input class="form-control" type="file" id=bukti" name="bukti" required >
                                     </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <a class="btn btn-warning btn-user btn-block" href="<?=base_url('welcome/index')?>">Kembali</a>
                                <hr>
                              
                                <?=form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

