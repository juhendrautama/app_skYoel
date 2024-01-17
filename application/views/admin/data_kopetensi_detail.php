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
                            <a href="Data_kompetensi" class="btn btn-secondary btn-sm">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>


                            <center>
                                <h3>Data Kompetensi Pegawai</h3>
                            </center>
                            <hr>
                            Nama Pegawai : <?php echo $tampil_data_pegawai_id->nama; ?>
                            <hr>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#TambahKopetensi">
                                <i class="nav-icon  fas fa-plus"></i> Data Kompetensi
                            </a>


                            <!-- Modal -->
                            <div class="modal fade" id="TambahKopetensi" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Tambah
                                                Kompetensi
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="Data_kompetensi/Simpan_data_kopetensi" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="form-group col-md-12">
                                                        <label> Pegawai </label>
                                                        <select readonly class="form-control" name="id_pegawai" id="">

                                                            <option
                                                                value="<?php echo $tampil_data_pegawai_id->id_pegawai; ?>">
                                                                <?php echo $tampil_data_pegawai_id->nama; ?>
                                                            </option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="form-group col-md-12">
                                                        <label> Kategori Kompetensi </label>
                                                        <select required class="form-control" name="kategori" id="">
                                                            <option value="">Pilih Kompetensi</option>
                                                            <option value="Diklat">Diklat</option>
                                                            <option value="Bintek">Bintek</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">


                                                    <div class="form-group col-md-12">
                                                        <label>Judul</label>
                                                        <input type="text" class="form-control" required name="judul"
                                                            value="" placeholder="Judul">
                                                    </div>
                                                </div>

                                                <div class="row">


                                                    <div class="form-group col-md-12">
                                                        <label>Tanggal Pelaksana</label>
                                                        <input type="date" class="form-control" required
                                                            name="tgl_pelaksanaan" value="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm"
                                                    name="proses">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                        </div>
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead style="font-size:13px;">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Jenis Kopetensi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size:12px;">
                                    <?php $no = 1;
                                    foreach ($data_kopetensi_id_pegawai->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->judul; ?></td>
                                        <td><?php echo $row->tgl_pelaksanaan; ?></td>
                                        <td><?php echo $row->kategori; ?></td>
                                        <td>
                                            <a href="Data_kompetensi/Hapus_data/<?php echo $row->id_kopetensi ?>/<?php echo $tampil_data_pegawai_id->id_pegawai; ?>"
                                                Onclick="return confirm('apakah yakin ingin di Hapus ?');"
                                                class="btn btn-danger btn-sm">
                                                <i class="nav-icon  fas fa-trash"></i>
                                            </a>

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