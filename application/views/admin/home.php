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


        <div class="content-wrapper">


            <?php
            $level = $this->session->userdata('level');
            if ($level == '1') {
                $this->load->view('admin/tools/isiHomeAdmin');
            } else if ($level == '2') {
                $this->load->view('admin/tools/isiHomeMaskapai');
            }
            ?>
        </div>

        <?php $this->load->view('admin/tools/footer'); ?>
        <!-- Control Sidebar -->

    </div>

    <?php $this->load->view('admin/tools/js_footer'); ?>
    <!-- ./wrapper -->
</body>

</html>