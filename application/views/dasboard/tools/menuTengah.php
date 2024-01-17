<div class="icon-boxes position-relative">
    <div class="container position-relative">
        <div class="row gy-1 mt-5">

            <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="icon-box" style="background-color:#0C879A;">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40%" width="50%" viewBox="0 0 512 512"
                            style="color: aliceblue;">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM120.5 247.2c12.4-4.7 18.7-18.5 14-30.9s-18.5-18.7-30.9-14C43.1 225.1 0 283.5 0 352c0 88.4 71.6 160 160 160c61.2 0 114.3-34.3 141.2-84.7c6.2-11.7 1.8-26.2-9.9-32.5s-26.2-1.8-32.5 9.9C240 440 202.8 464 160 464C98.1 464 48 413.9 48 352c0-47.9 30.1-88.8 72.5-104.8zM259.8 176l-1.9-9.7c-4.5-22.3-24-38.3-46.8-38.3c-30.1 0-52.7 27.5-46.8 57l23.1 115.5c6 29.9 32.2 51.4 62.8 51.4h5.1c.4 0 .8 0 1.3 0h94.1c6.7 0 12.6 4.1 15 10.4L402 459.2c6 16.1 23.8 24.6 40.1 19.1l48-16c16.8-5.6 25.8-23.7 20.2-40.5s-23.7-25.8-40.5-20.2l-18.7 6.2-25.5-68c-11.7-31.2-41.6-51.9-74.9-51.9H282.2l-9.6-48H336c17.7 0 32-14.3 32-32s-14.3-32-32-32H259.8z" />
                        </svg>
                    </div>
                    <h4 class="title">
                        <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#WeelChair">WeelChair
                            aaa</a>
                    </h4>
                </div>

            </div>

            <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box" style="background-color:#0C879A;">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="50%" width="50%" viewBox="0 0 640 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M628.9 210.7L494.4 49.3A48 48 0 0 0 457.5 32H32C14.3 32 0 46.3 0 64v288c0 17.7 14.3 32 32 32h32c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32V241.4c0-11.2-3.9-22.1-11.1-30.7zM64 192V96h96v96H64zm96 240c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm160-240h-96V96h96v96zm160 240c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm-96-240V96h66l80 96H384z" />
                        </svg>
                    </div>
                    <h4 class="title">
                        <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#CarAssistance">Car
                            Assistance</a>
                    </h4>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal WeelChair-->
<div class="modal fade modal-lg" id="WeelChair" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">WeelChair</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="Halaman_utama/Simpan_order">
                    <input hidden type="text" name="kodeBoking" value="<?php echo $kodeBoking; ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" id="recipient-name" name="nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Usia</label>
                                <input type="text" class="form-control" id="recipient-name" name="usia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                <select name="jenisKelamin" class="form-control">
                                    <option value="">Pillih</option>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="recipient-name" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" id="recipient-name" name="alamat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Bandara</label>
                                <input hidden type="text" class="form-control" id="recipient-name" name="idBandara"
                                    value="<?php echo $GetdataBandaraid->idBandara; ?>">
                                <input readonly type="text" class="form-control" id="recipient-name" name="namaBandara"
                                    value="<?php echo $GetdataBandaraid->namaBandara; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Maskapai</label>

                                <select name="idMaskapai" class="form-control">
                                    <option value="">Pillih</option>
                                    <?php foreach ($GetdataMaskapai->result() as $row) { ?>
                                    <option value="<?php echo $row->idMaskapai; ?>"><?php echo $row->namaMaskapai; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <input hidden type="number" name="KategoriBoking" value="1">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Boarding Time</label>
                                <input type="time" class="form-control" id="recipient-name" name="boardingTime">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Waktu Berangkat</label>
                                <input type="time" class="form-control" id="recipient-name" name="waktuBerangkat">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Tanggal Berangkat</label>
                                <input type="date" class="form-control" id="recipient-name" name="tgl_berangkat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Alasan Peminjaman</label>
                                <input type="text" class="form-control" id="recipient-name" name="alasanPeminjaman">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Tempat Jemput</label>
                                <input type="text" class="form-control" id="recipient-name" name="tempatJemput">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="proses" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal WeelChair-->

<!-- Modal CarAssistance-->
<div class="modal fade modal-lg" id="CarAssistance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Car Assistance</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="Halaman_utama/Simpan_order">
                    <input hidden type="text" name="kodeBoking" value="<?php echo $kodeBoking; ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" id="recipient-name" name="nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Usia</label>
                                <input type="text" class="form-control" id="recipient-name" name="usia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                <select name="jenisKelamin" class="form-control">
                                    <option value="">Pillih</option>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="recipient-name" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" id="recipient-name" name="alamat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Bandara</label>
                                <input hidden type="text" class="form-control" id="recipient-name" name="idBandara"
                                    value="<?php echo $GetdataBandaraid->idBandara; ?>">
                                <input readonly type="text" class="form-control" id="recipient-name" name="namaBandara"
                                    value="<?php echo $GetdataBandaraid->namaBandara; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Maskapai</label>

                                <select name="idMaskapai" class="form-control">
                                    <option value="">Pillih</option>
                                    <?php foreach ($GetdataMaskapai->result() as $row) { ?>
                                    <option value="<?php echo $row->idMaskapai; ?>"><?php echo $row->namaMaskapai; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <input hidden type="number" name="KategoriBoking" value="2">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Boarding Time</label>
                                <input type="time" class="form-control" id="recipient-name" name="boardingTime">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Waktu Berangkat</label>
                                <input type="time" class="form-control" id="recipient-name" name="waktuBerangkat">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Tanggal Berangkat</label>
                                <input type="date" class="form-control" id="recipient-name" name="tgl_berangkat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Alasan Peminjaman</label>
                                <input type="text" class="form-control" id="recipient-name" name="alasanPeminjaman">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Tempat Jemput</label>
                                <input type="text" class="form-control" id="recipient-name" name="tempatJemput">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="proses" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal CarAssistance-->