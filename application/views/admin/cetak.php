<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>

                                <table border="1">
                              
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelopor</th>
                                            <th>Judul Laporan</th>
                                            <th>Detail Pengaduan</th>
                                            <th>Tanggal </th>
                                            <th>Kontak Pelopor</th>
                                            <th>tempat tinggal</th>
                                            <!-- <th>Bukti   </th> -->
                                          
                                        </tr>
                                        <?php
                                        $no =1;
                                        foreach ($formpengaduan as $mhs ):?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $mhs['nama_pelopor']?></td>
                                            <td><?php echo $mhs['judul_laporan']?></td>
                                            <td><?php echo $mhs['detail_pengaduan']?></td>
                                            <td><?php echo $mhs['tanggal']?></td>
                                            <td><?php echo $mhs['kontak_pelopor']?></td>
                                            <td><?php echo $mhs['tempat_tinggal']?></td>
                                            <!-- <td><?php echo $mhs->bukti?></td> -->
                                          
                                        </tr>
                                        <?php endforeach;?>
                                </table>
                                <script type="text/javascript">
                                window.print();
                                </script>
</body>
</html>