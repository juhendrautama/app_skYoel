<?php
$idBandara = $this->session->userdata('idBandara');
$dataBadara = $this->M_crud_bandara->GetDataid($idBandara)->row();
$idMaskapai = $this->session->userdata('idMaskapai');
$dataMaskapai = $this->M_crud_maskapai->GetDataid($idMaskapai)->row();

?>
<section class="content-header">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-sm-12">
                <center>
                    <img src="img/LOGO/2.png" style="width:15%;" class="img-responsive">
                    <p>
                        <a class="h1" style="color:black;"><b>APLIKASI</b></a><br>
                        <font style="font-size:25px;">
                            WeelChair And Car Assistance
                        </font>
                        <br>
                        <font style="font-size:19px;">
                            <?php echo $dataBadara->namaBandara; ?>
                            (<?php echo $dataMaskapai->namaMaskapai; ?>)
                        </font>
                    </p>
                </center>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="DataOrder" class=" elevation-1">
                            <div class="info-box a">
                                <span class="info-box-icon bg-info"><i class="fas fa-clipboard-list"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="color:#111;">Data Order</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="Petugas">
                            <div class="info-box a">
                                <span class="info-box-icon bg-info"><i class="fas fa-user-tie"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="color:#111;">Petugas</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="WeelChair">
                            <div class="info-box a">
                                <span class="info-box-icon bg-info"><i class="fas fa-wheelchair"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="color:#111;">Data WeelChair</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="CarAssistance">
                            <div class="info-box a">
                                <span class="info-box-icon bg-info"><i class="fas fa-shuttle-van"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="color:#111;">Data Car Assistance</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div><!-- /.container-fluid -->
</section>