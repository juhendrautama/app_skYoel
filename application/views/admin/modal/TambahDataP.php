<div class="modal fade " id="TambahDataP" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Petugas
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Petugas/SimpanData" method="POST">
                <div class="modal-body ">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Nama :</label>
                            <input class="form-control" type="text" value="" name="nama" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Jenis Kelamin :</label>
                            <select name="jenisKelamin" class="form-select form-control" required>
                                <option value="">Pillih</option>
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Email :</label>
                            <input class="form-control" type="text" value="" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Petugas :</label>
                            <select name="kodePetugas" class="form-select form-control" id="kodePetugas"
                                onchange="pillih_tugas()">
                                <option value="">Pillih</option>
                                <option value="kursi">WeelChair</option>
                                <option value="mobil">Car Assistance</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="display: none;" id="tampilKursi">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Kursi :</label>
                            <select name="idPkursi" class="form-select form-control">
                                <option value="">Pillih</option>
                                <?php foreach ($GetkursiAll->result() as $row) { ?>
                                <option value="<?= $row->idPkursi; ?>"><?= $row->namaPkursi; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="display: none;" id="tampilmobil">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Mobil :</label>
                            <select name="idPmobil" class="form-select form-control">
                                <option value="">Pillih</option>
                                <?php foreach ($GetmobilAll->result() as $row) { ?>
                                <option value="<?= $row->idPmobil; ?>"><?= $row->namaPmobil; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Status :</label>
                            <select name="statusP" class="form-select form-control">
                                <option value="">Pillih Status</option>
                                <option value="Aktip">Aktip</option>
                                <option value="Tidak Aktip">Tidak Aktip</option>
                            </select>
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

<script type="text/javascript">
function pillih_tugas(id) {
    let kodePetugas = $('#kodePetugas').val();


    if (kodePetugas == 'kursi') {
        $("#tampilKursi").css('display', 'block');
        $("#tampilmobil").css('display', 'none');
    } else if (kodePetugas == 'mobil') {
        $("#tampilKursi").css('display', 'none');
        $("#tampilmobil").css('display', 'block');
    }
}
</script>