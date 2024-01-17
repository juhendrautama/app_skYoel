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
                                <h3>REKAP</h3>
                            </center>

                            <hr>
                            <form method="post" action="Laporan">
                                <table>
                                    <tr>
                                        <td><label>Tanggal </label> </td>
                                        <td>:</td>

                                        <?php if (isset($_POST['proses'])) { ?>
                                            <td><input type="date" class="form-control" name="tgl1" value="<?php echo $tgl1 = $_POST['tgl1'] ?>"></td>
                                            <td>&nbsp; <b>-</b>&nbsp; </td>
                                            <td><input type="date" class="form-control" name="tgl2" value="<?php echo $tgl2 = $_POST['tgl2'] ?>"></td>
                                        <?php } else { ?>
                                            <td><input type="date" class="form-control" name="tgl1" value=""></td>
                                            <td>&nbsp; <b>-</b>&nbsp; </td>
                                            <td><input type="date" class="form-control" name="tgl2" value=""></td>
                                        <?php } ?>
                                        <td> &nbsp;</td>
                                        <td>
                                            <input type="submit" class="btn btn-primary btn-sm" name="proses" value="GO">
                                            <?php if (isset($_POST['proses'])) {  ?>
                                                <a target="_blank" href="Laporan/Cetak/<?php echo $tgl1; ?>/<?php echo $tgl2; ?> " class="btn btn-success btn-sm">
                                                    <span class="nav-icon fas fa-print"></span>
                                                    Cetak
                                                </a>
                                            <?php } else {
                                            } ?>
                                        </td>
                            </form>
                            <td>
                            </td>
                            </tr>
                            </table>
                            <hr>



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
                                    <?php if (isset($_POST['proses'])) { ?>
                                        <?php $no = 1;
                                        foreach ($tampil_data_cari_laporan->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td>
                                                    <?php
                                                    $id_pegawai = $row->id_pegawai;
                                                    $data_pegawai = $this->M_crud_data_pegawai->tampil_data_pegawai_id($id_pegawai);
                                                    echo $data_pegawai->nama;
                                                    ?>
                                                </td>
                                                <td><?php echo  $data_pegawai->nip; ?></td>
                                                <td><?php echo  $data_pegawai->jabatan; ?></td>
                                                <td><?php echo  $data_pegawai->tmt_pegawai; ?></td>
                                                <td>
                                                    <?php
                                                    $tahun_masuk = substr($data_pegawai->nip, 8, 4);
                                                    $bulan_masuk = substr($data_pegawai->nip, 12, 2);
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

                            </table>
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