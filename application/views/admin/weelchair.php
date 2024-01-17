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
                                <h3>Data WeelChair</h3>
                            </center>
                            <hr>
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#TambahData">
                                <i class="nav-icon  fas fa-plus"></i> Tambah Data
                            </a>
                            <!-- MODAL -->
                            <div class="modal fade " id="TambahData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">
                                                <i class="nav-icon fa fa-edit"></i> Tambah Data
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="WeelChair/SimpanData" method="POST">
                                            <div class="modal-body ">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label class="col-form-label"> Nama :</label>
                                                        <input class="form-control" type="text" value="" name="namaPkursi" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm" name="proses">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- MODAL -->
                        </div>
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>Tanggal</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getWeelChairAll->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->namaPkursi; ?></td>
                                            <td><?php echo $row->tgl; ?></td>


                                            <td>
                                                <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editData" data-id="<?= $row->idPkursi; ?>">
                                                    <i class="nav-icon  fas fa-edit"></i>
                                                </a>
                                                <?php if ($row->statusK == '3') { ?>
                                                <?php } else if ($row->statusK == '1') { ?>
                                                    <a href="WeelChair/HapusData/<?= $row->idPkursi; ?>" class="btn btn-info btn-sm">
                                                        <i class="nav-icon  fas fa-trash"></i>
                                                    </a>
                                                <?php } ?>
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
    <!-- Modal -->
    <div class="modal fade " id="editData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="WeelChair/SimpanUbah" method="POST">
                    <div class="modal-body isiEditkursi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="proses">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <?php $this->load->view('admin/tools/js_footer'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
        $('#editData').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>WeelChair/GetkursiId",
                data: {
                    id: id
                },
                success: function(data) {
                    $('.isiEditkursi').html(data);
                }
            });
        });
    </script>
    <!-- ./wrapper -->
</body>

</html>