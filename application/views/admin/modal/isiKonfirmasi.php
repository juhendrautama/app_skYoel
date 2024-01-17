<table class="table table-bordered table-hover">
    <tr>
        <td>Nama</td>
        <td><?php echo $getDataOrderidK->nama; ?></td>

    </tr>
    <tr>
        <td>Tanggal Berangkat</td>
        <td><?php echo date('d F Y', strtotime($getDataOrderidK->tgl_berangkat)); ?></td>

    </tr>
    <tr>
        <td>Boarding Time</td>
        <td><?php echo $getDataOrderidK->boardingTime; ?></td>

    </tr>
    <tr>
        <td>Waktu Berangakat</td>
        <td><?php echo $getDataOrderidK->waktuBerangkat; ?></td>
    </tr>
    <!-- <tr style="font-size:10px;">




    </tr> -->
</table>
<input hidden type="text" name="id_order" value="<?php echo $getDataOrderidK->id_order; ?>">
<?php if ($getDataOrderidK->KategoriBoking == '1') { ?>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="recipient-name" class="col-form-label"> WeelChair :</label>
            <select name="idPkursi" class="form-select form-control" id="pilihPk" required>
                <option value="">Pillih WeelChair</option>
                <?php foreach ($getWeelChairAll->result() as $row) { ?>
                    <option data-id="<?= $row->idPkursi; ?>" value="<?= $row->idPkursi; ?>"><?= $row->namaPkursi; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="recipient-name" class="col-form-label"> Petugas :</label>
            <select name="idPetugas" class="form-select form-control" id="DataPetugas" required>
                <option value="">Pillih Petugas</option>
            </select>

        </div>
    </div>
<?php } else if ($getDataOrderidK->KategoriBoking == '2') { ?>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="recipient-name" style="font-size:15px;"> Car :</label>
            <select name="idPmobil" class="form-select form-control" id="pilihPm" required>
                <option value="">Pillih Car</option>
                <?php foreach ($getCarAll->result() as $row) { ?>
                    <option data-id="<?= $row->idPmobil; ?>" data-jp="<?= $row->JumlahPenumpang; ?>" value="<?= $row->idPmobil; ?>"><?= $row->namaPmobil; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="recipient-name" style="font-size:15px;"> Petugas :</label>
            <select name="idPetugas" class="form-select form-control" id="DataPetugasM" required>
                <option value="">Pillih Petugas</option>
            </select>
        </div>
    </div>
    <input hidden type="date" value="<?= $getDataOrderidK->tgl_berangkat ?>" name="" id="tgl_brk">
    <input hidden type="time" value="<?= $getDataOrderidK->waktuBerangkat ?>" name="" id="waktu_brk">
    <div class="row">
        <div class="form-group col-md-4">
            <label for="recipient-name" style="font-size:15px;"> Max Penumpang :</label>
            <input readonly class="form-control" type="number" value="0" name="" id="KapPenumpang">
        </div>


        <div class="form-group col-md-4">
            <label for="recipient-name" style="font-size:15px;"> Jumlah Order :</label>
            <input readonly class="form-control" type="number" value="0" name="" id="totorder">
        </div>
        <div class="form-group col-md-4">
            <label for="recipient-name" style="font-size:15px;"> Kursi Kosong :</label>
            <input readonly class="form-control" type="number" value="0" name="" id="hasil2">
        </div>
    </div>
<?php } ?>

<script type="text/javascript">
    $('#pilihPk').on('change', function() {
        // ambil data dari elemen option yang dipilih
        let idPkursi = $('#pilihPk option:selected').data('id');
        // tampilkan data ke element
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>DataOrder/GetPetugasK",
            data: {
                id: idPkursi
            },
            success: function(data) {
                $('#DataPetugas').html(data);
            }
        });
    });

    $('#pilihPm').on('change', function() {
        // ambil data dari elemen option yang dipilih
        let KapPenumpang = $('#pilihPm option:selected').data('jp');
        let idPmobil = $('#pilihPm option:selected').data('id');

        let tgl_brk_ = $('#tgl_brk').val();
        let waktu_brk_ = $('#waktu_brk').val();
        // tampilkan data ke element
        $('#KapPenumpang').val(KapPenumpang);
        //penjumlahan



        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>DataOrder/GetPetugasM",
            data: {
                id: idPmobil
            },
            success: function(data) {
                $('#DataPetugasM').html(data);
            }
        });

        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>DataOrder/JumOrder",
            data: {
                id: idPmobil,
                tgl_brk: tgl_brk_,
                waktu_brk: waktu_brk_
            },
            success: function(data) {
                $('#totorder').val(data);
                // Konversi nilai data ke tipe numerik jika diperlukan
                let nilaiData = parseFloat(data);

                // Tambahkan nilai data ke KapPenumpang_
                let hasil = parseFloat($('#KapPenumpang').val()) - nilaiData;



                // Tampilkan hasil22 ke elemen dengan ID 'hasil2'
                let kusriKosong = parseFloat($('#hasil2').val(hasil));
                let MaxPenumpang_ = parseFloat($('#KapPenumpang').val());
                if (kusriKosong > MaxPenumpang_) {
                    $("#tombol").css('display', 'none');
                } else {
                    $("#tombol").css('display', 'block');
                }

            }
        });
    });
</script>