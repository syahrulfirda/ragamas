<!DOCTYPE html>
<html lang="en"><head><style>
    #tabel{
    table-layout: fixed;
    width: 900px;
    word-wrap: break-word;
    /* border: 2px solid black; */
    border-collapse: collapse;
}</style></head><body><Center><table>
		<td>
			<img src="<?=base_url('asset/img/logo.png');?>"  width="200" height="150" alt="" >   
		</td>
		<td><h3><b>KECAMATAN CIMAHI SELATAN</b><br>
			<h6>Jl. Baros No.14, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40533</h6>
            <h6> Pemerintah Kota Cimahi  </h6>
			<p>Telp/Fax : (022) 6629676</p></h3>       
		</td>
		</table>
		<hr size="2px" noshade="">
		<br>
        <?php
                                        $no =1;
                                        foreach ($formpengaduan as $mhs ):?>
        
		<p align="center"><u><b>SURAT PENGADUAN</b></u></p>
 		 <p align="center"> Disampaikan dengaan hormat,saya selaku pelapor,dengan ini menyatakan pengaduan sebagai berikut :</p>
 		 <table id="tabel">
			<tr align="left">
                <input type="hidden" name="id" id="id">
 		 	    	<th style="width:150px;">Nama Pelapor</th>
 		 	    	<td style="width:10px;">:</td>
                  <td><?php echo $mhs['nama_pelopor']?></td>
 		 	</tr>
              <tr align="left">
 		 		<th style="width:150px;">Nik</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['nik']?></td>
 		 	</tr>
            <tr align="left">
 		 		<th style="width:150px;">Kota</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['kota']?></td>
 		 	</tr>
              <tr align="left">
 		 		<th style="width:150px;">Kecamatan</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['kecamatan']?></td>
 		 	</tr>
            <tr align="left">
 		 		<th style="width:150px;">Kelurahan</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['kelurahan']?></td>
 		 	</tr>
 		 	<tr align="left">
 		 		<th style="width:150px;">Judul Laporan</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['judul_laporan']?></td>
 		 	</tr>
 		 	</tr>
            <tr align="left">
 		 		<th style="width:150px;">Tanggal</th>
                  <td style="width:10px;">:</td>
                  <td><?php echo $mhs['tanggal']?></td>
 		 	</tr>
              <tr align="left">
                  <th style="width:150px;">Kontak Pelopor</th>
                  <td style="width:10px;">:</td>
                  <td>+62<?php echo $mhs['kontak_pelopor']?></td>
              </tr>
              <tr align="left" class="atur2">
 		 		<th style="width:150px;">Detail Pengaduan</th>
                  <td style="width:10px;">:</td>
                  <td id="coba"><?php echo $mhs['detail_pengaduan']?></td>
              <?php endforeach;?>
        </table></Center>
        <br>
        <p align="center"> &nbsp &nbsp &nbsp Demikian surat Pengaduan ini kami buat dengan sebenar-benarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
 		
         <p align="center"><b> &nbsp &nbsp &nbsp Surat ini dibuat dengan sebenar-benarnya  oleh <i><?php echo $mhs['nama_pelopor']?></i> sebagai pelapor dengan nik <i><?php echo $mhs['nik']?></b></i></p>

 		
         <script type="text/javascript">
                                window.print();
                                </script>                      
</body>
<link href="<?=base_url('asset/css/style.css')?>" rel="stylesheet">
<link href="<?=base_url('asset/');?>css/sb-admin-2.min.css" rel="stylesheet">
<link  href="<?=base_url('asset/');?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</html>
