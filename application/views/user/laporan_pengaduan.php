<!DOCTYPE html>
<html lang="en"><head> <style>
    @media print{
        .h3{
            margin-top:70px;
        }
        .navbar-nav,  
        .btn,
        .fas,
        th:nth-child(8),td:nth-child(8)
        {
            display: none;
        }
    }
    table{
    table-layout: fixed;
    width: 450px;
    word-wrap: break-word;
    /* border: 2px solid black; */
    border-collapse: collapse;
}

table  body{
  display:block;
  height:200px;
  overflow:auto;
}
    </style>

   


</head><body>
                                <table border="1" style="text-align: center;">
                                        <tr>
                                            <th style="width:50px;">No</th>
                                            <th style="width:120px;">Nama Pelopor</th>
                                            <th style="width:120px;">Judul Laporan</th>
                                            <th style="width:120px;">Detail Pengaduan</th>
                                            <th style="width:120px;">Tanggal </th>
                                            <th style="width:120px;">Kontak Pelopor</th>
                                            <th style="width:120px;">tempat tinggal</th>
                                            <!-- <th>Bukti   </th> -->
                                        </tr>
                                        <?php
                                        $no =1;
                                        foreach ($formpengaduan as $mhs ):?>
                                        <tr>
                                            <td style="width:10px;" ><?php echo $no++?></td>
                                            <td style="width:10px;"><?php echo $mhs['nama_pelopor']?></td>
                                            <td style="width:10px;"><?php echo $mhs['judul_laporan']?></td>
                                            <td style="width:100px;"><?php echo $mhs['detail_pengaduan']?></td>
                                            <td style="width:10px;"><?php echo $mhs['tanggal']?></td>
                                            <td style="width:10px;"><?php echo $mhs['kontak_pelopor']?></td>
                                            <td style="width:10px;"><?php echo $mhs['tempat_tinggal']?></td>
                                            <!-- <td><?php echo $mhs->bukti?></td> -->
                                          
                                        </tr>
                                        <?php endforeach;?>
                                </table>
</body></html>