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
                            <a href="DataOrder/" class="btn btn-secondary btn-sm">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <center>
                                <h3>Data Order</h3>
                            </center>
                            <hr>
                            <div class="card-body table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Email</td>
                                            <td>Status</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($getDataOrderIdadmin1->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td>
                                                    <?php if ($row->status == '1') { ?>
                                                        <p style="color:red;">Proses</p>
                                                    <?php } else if ($row->status == '2') { ?>
                                                        <p style="color:blue;">Siap Jalan</p>
                                                    <?php } else if ($row->status == '3') { ?>
                                                        <p style="color:green;">Selesai</p>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($row->status == '1') { ?>
                                                        <a href="#" class="btn btn-info btn-sm  elevation-1" data-toggle="modal" data-target="#konfir" data-id="<?= $row->id_order; ?>">
                                                            Konfirmasi
                                                        </a>
                                                    <?php } else if ($row->status == '2') { ?>
                                                        <a href="DataOrder/KonfirmasiSelesai/<?= $row->id_order; ?>/<?= $row->idPkursi; ?>" class="btn btn-info btn-sm  elevation-1">
                                                            Konfirmasi Selesai
                                                        </a>
                                                    <?php } else if ($row->status == '3') { ?>
                                                        <p style="color:green;">Selesai</p>
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
    <div class="modal fade " id="konfir" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-user-cog"></i> Konfirmasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="DataOrder/Konfirmasi" method="POST">
                    <div class="modal-body isikonfir">
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
        $('#konfir').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>DataOrder/GetKonfir",
                data: {
                    id: id
                },
                success: function(data) {
                    $('.isikonfir').html(data);
                }
            });
        });
    </script>
    <!-- ./wrapper -->
</body>

</html>