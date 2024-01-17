<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('dasboard/tools/head'); ?>
</head>

<body>
    <!-- menu atas-->
    <?php $this->load->view('dasboard/tools/menuAtas'); ?>
    <!-- menu atas-->

    <!-- ======= Contact Section ======= -->
    <section id="DaftarPesanan" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="card">
                <div class="card-body">
                    <center>Cek Pesanan</center>
                    <hr>
                    <form action="Halaman_utama/CekPesanan" method="post">
                        <div class="row">
                            <div class="input-group mb-3 col-4">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                                <button class="btn btn-danger" name="proses" type="submit">Cek</button>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($_POST['proses'])) { ?>
                        <div class="card-body table-responsive">
                            <?php if (empty($getDataOrderEmail->nama)) {
                                echo "Data Tidak Ada";
                            } else { ?>
                                <p>Nama : <?php echo $getDataOrderEmail->nama; ?></p>
                                <?php if ($getDataOrderEmail->status == '1') {
                                    $s = 'Proses';
                                } else if ($getDataOrderEmail->status == '2') {
                                    $s = 'Siap Jalan';
                                } else if ($getDataOrderEmail->status == '3') {
                                    $s = 'Selesai';
                                } ?>
                                <?php if ($getDataOrderEmail->idPetugas == '0') {
                                } else { ?>
                                    <p>Petugas :
                                        <?php
                                        $idPetugas = $getDataOrderEmail->idPetugas;
                                        $dataPetugas = $this->M_crud_petugas->GetPetugasId($idPetugas)->row();
                                        echo $dataPetugas->nama;

                                        ?>
                                    </p>
                                <?php } ?>
                                <p>Status : <?php echo $s; ?></p>


                                <?php if ($getDataOrderEmail->status == '1') { ?>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 25%">25%
                                        </div>
                                    </div>
                                <?php } else if ($getDataOrderEmail->status == '2') { ?>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%">50%
                                        </div>
                                    </div>
                                <?php } else if ($getDataOrderEmail->status == '3') { ?>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">
                                            100%
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="card-body table-responsive">

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- End Footer -->
    <?php $this->load->view('dasboard/tools/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="tmp_depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tmp_depan/assets/vendor/aos/aos.js"></script>
    <script src="tmp_depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tmp_depan/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="tmp_depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="tmp_depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Template Main JS File -->
    <script src="tmp_depan/assets/js/main.js"></script>

    <?php $this->load->view('admin/tools/js_footer'); ?>


    <!-- data tabel -->
    <script src="tmp_depan/assets/js/jquery.dataTables.min.js"></script>
    <script src="tmp_depan/assets/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            new DataTable('#example');
        });
    </script>

</body>

</html>