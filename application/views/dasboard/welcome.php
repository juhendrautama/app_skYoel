<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('dasboard/tools/head'); ?>
</head>

<body>
    <!-- menu atas-->
    <?php $this->load->view('dasboard/tools/menuAtas'); ?>
    <!-- menu atas-->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="background-color:#14A2B8;">
        <div class="container position-relative">
            <div class="row gy-2" data-aos="fade-in">
                <!-- slider -->
                <?php $this->load->view('dasboard/tools/slider'); ?>
                <!-- slider -->
            </div>
        </div>
        <!-- menu tengah -->
        <?php $this->load->view('dasboard/tools/menuTengah'); ?>
        <!-- menu tengah -->
    </section>
    <!-- End Hero Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="maskapai" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Daftar Maskapai</h2>
            </div>
            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($GetdataMaskapai->result() as $row) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <center>
                                    <div class="testimonial-item">
                                        <center>
                                            <h3><?php echo $row->namaMaskapai; ?></h3>
                                        </center>
                                    </div>
                                </center>
                            </div>
                        </div><!-- End testimonial item -->
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kontak</h2>

            </div>
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center" style="background-color:#14A2B8;">
                        <div class="info-item d-flex" style="background-color:#0C6F7F;">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" style="background-color:#0C6F7F;">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" style="background-color:#0C6F7F;">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.192302331027!2d103.64040507522813!3d-1.635831236108582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2585fad6e79e9b%3A0xf039d8194a03080!2sBandara%20Sultan%20Thaha%20Saifuddin!5e0!3m2!1sid!2sid!4v1704789049901!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Contact Form -->

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
    <script src="tmp_depan/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="tmp_depan/assets/js/main.js"></script>

</body>

</html>