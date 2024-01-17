<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/tools/head'); ?>
</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">
        <!-- MENU ATAS -->
        <?php $this->load->view('admin/tools/menu_atas'); ?>
        <!-- MENU ATAS-->

        <!-- MENU SAMPING -->
        <?php $this->load->view('admin/tools/menu_samping'); ?>
        <!-- MENU SAMPING -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <a href="Home" class="btn btn-secondary btn-sm">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>


                            <center>
                                <h3>Cek Data Kompetensi</h3>
                            </center>

                            <hr>
                            <form method="post" action="Cek_data_kompetensi">
                                <table>
                                    <tr>


                                        <?php if (isset($_POST['proses'])) { ?>
                                        <td><label>Nip</label>:</td>
                                        <td><input type="number" class="form-control" name="nip"
                                                value="<?php echo  $_POST['nip'] ?>"></td>
                                        <td><label>Nama</label>:</td>
                                        <td><input type="text" class="form-control" name="nama"
                                                value="<?php echo $_POST['nama'] ?>"></td>
                                        <?php } else { ?>
                                        <td><label>Nip</label>:</td>
                                        <td><input type="number" class="form-control" name="nip" value=""></td>
                                        <td><label>Nama</label>:</td>
                                        <td><input type="text" class="form-control" name="nama" value=""></td>
                                        <?php } ?>
                                        <td> &nbsp;</td>
                                        <td>
                                            <input type="submit" class="btn btn-primary btn-sm" name="proses"
                                                value="GO">

                                        </td>
                            </form>
                            <td>
                            </td>
                            </tr>
                            </table>
                            <hr>



                            <table border="1" style="width:100%;">
                                <thead style="font-size:13px;">
                                    <tr border="1">
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
                                    <?php if (isset($_POST['proses'])) { ?>
                                    <?php $no = 1;
                                        foreach ($tampil_cekdatakompetensi->result() as $row) { ?>
                                    <tr border="1">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo  $row->nama; ?></td>
                                        <td><?php echo  $nip = $row->nip; ?></td>
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
                                    <?php } else {
                                    } ?>

                                </tbody>

                            </table><br>
                            <?php if (isset($_POST['proses'])) { ?>
                            <?php if (empty($nip)){}else{ ?>
                            <a target="_blank" href="Cek_data_kompetensi/Cetak/<?php echo $nip; ?>"
                                class="btn btn-success btn-sm">
                                <span class="nav-icon fas fa-print"></span>
                                Cetak
                            </a>
                            <?php } ?>
                            <?php } else {} ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </section>
    <!-- /.content-wrapper -->

    <?php $this->load->view('admin/tools/footer'); ?>
    <!-- Control Sidebar -->

    </div>

    <?php $this->load->view('admin/tools/js_footer'); ?>
    <script type="text/javascript">
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
    <!-- ./wrapper -->
</body>

</html>