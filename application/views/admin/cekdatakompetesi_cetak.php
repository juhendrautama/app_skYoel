<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/tools/head'); ?>

</head>

<body onload="window.print();">
    <img src="img/logo/logo_pemprov_new.png" style="margin-right:500px;">
    <center style="margin-top:-75px;">
        <font style="font-size:25px; ">Dinas Kumuniskasi Informatika Provinsi Jambi</font> </br>
        <font style="font-size:10px; margin-top:-600px;">JL H Adam Malik, Handil Jaya No. 81 , Jambi, Indonesia </font>
        <br>
        <font style="font-size:10px; ">HP : 082398567789</font>
    </center>

    <b>
        <hr size="100px">
    </b>
    <br><br>
    <table border="1" style="width:100%;">
        <thead style="font-size:13px;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nip</th>
                <th>Jabatan</th>
                <th>TMT Pegawai</th>
                <th>Masa Kerja</th>
                <th>Diklat / Bintek</th>
                <th>Judul</th>
                <th>Tanggal Pelaksana</th>
            </tr>
        </thead>
        <tbody style="font-size:12px;">
            <?php $no = 1;
            foreach ($cekdatakompetensi_cetak->result() as $row) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo  $row->nama; ?></td>
                    <td><?php echo  $row->nip; ?></td>
                    <td><?php echo  $row->jabatan; ?></td>
                    <td><?php echo  $row->tmt_pegawai; ?></td>
                    <td>
                        <?php
                        $tahun_masuk = substr($row->nip, 8, 4);
                        $bulan_masuk = substr($row->nip, 12, 2);
                        $tahun_sekarang = date('Y');
                        $bulan_sekarang = date('m');
                        $date1 = date_create($tahun_masuk . '-' . $bulan_masuk);
                        $date2 = date_create($tahun_sekarang . '-' . $bulan_sekarang);
                        $interval = date_diff($date1, $date2);
                        echo  $interval->y . " Tahun, " . $interval->m . " Bulan, ";
                        ?>
                    </td>
                    <td><?php echo $row->kategori; ?></td>
                    <td><?php echo $row->judul; ?></td>
                    <td><?php echo $row->tgl_pelaksanaan; ?></td>
                </tr>
            <?php $no++;
            } ?>


        </tbody>

    </table>





    <br>
    <div style="margin-left:20px;">
        <table>
            <tr>
                <td align="center">Dibuat</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td align="center">Diketahui</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align="center">____________</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td align="center">____________</td>
            </tr>

            <tr>

            </tr>
        </table>
    </div>



</body>

</html>