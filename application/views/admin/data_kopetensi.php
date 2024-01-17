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
                                <h3>Data Kompetensi Pegawai</h3>
                            </center>




                        </div>
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead style="font-size:13px;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nip</th>
                                        <th>Jabatan</th>
                                        <th>TMT Pegawai</th>
                                        <th>Masa Kerja</th>
                                        <th>Diklat / Bintek</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size:12px;">
                                    <?php $no = 1;
                                    foreach ($tampil_data_pegawai->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->jabatan; ?></td>
                                            <td><?php echo $row->tmt_pegawai; ?></td>
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
                                            <td>
                                                <?php $id_pegawai = $row->id_pegawai; ?>
                                                <?php $jum_data_kopetensi = $this->M_crud_data_kopetensi->jum_data_kopetensi($id_pegawai)->row() ?>
                                                <center>
                                                    <?php echo $jum_data_kopetensi->tot_kompetensi_pegawai ?>
                                                    <br>
                                                    <a href="Data_kompetensi/Detail_data/<?php echo $row->id_pegawai ?>" title="Lihat Data">
                                                        <i class="nav-icon  fas fa-eye"></i>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>

                            </table>
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