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
                                <h3>Data Order</h3>
                            </center>
                            <hr>
                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <a href="DataOrder/WeelChair">
                                            <div class="info-box a">
                                                <span class="info-box-icon bg-info"><i
                                                        class="fas fa-wheelchair"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text" style="color:#111;">
                                                        WeelChair</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <a href="DataOrder/CarAssistance">
                                            <div class="info-box a">
                                                <span class="info-box-icon bg-info"><i
                                                        class="fas fa-shuttle-van"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text" style="color:#111;"> Car
                                                        Assistance</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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

    <!-- ./wrapper -->
</body>

</html>