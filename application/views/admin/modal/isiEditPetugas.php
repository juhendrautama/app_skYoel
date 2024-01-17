<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Nama :</label>
        <input hidden type="text" name="idPetugas" value="<?= $GetPetugasid->idPetugas; ?>">
        <input class="form-control" type="text" value="<?= $GetPetugasid->nama; ?>" name="nama" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-form-label"> Jenis Kelamin :</label>
        <select name="jenisKelamin" class="form-select form-control" required>
            <?php if ($GetPetugasid->jenisKelamin == 'l') { ?>
            <option selected value="l">Laki-Laki</option>
            <option value="p">Perempuan</option>
            <?php } else if ($GetPetugasid->jenisKelamin == 'p') { ?>
            <option value="l">Laki-Laki</option>
            <option selected value="p">Perempuan</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label class="col-form-label"> Email :</label>
        <input class="form-control" type="text" value="<?= $GetPetugasid->email; ?>" name="email" required>
    </div>

</div>

<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Status :</label>
        <select name="statusP" class="form-select form-control">
            <?php if ($GetPetugasid->statusP == 'Aktip') { ?>
            <option selected value="Aktip">Aktip</option>
            <option value="Tidak Aktip">Tidak Aktip</option>
            <?php } else if ($GetPetugasid->statusP == 'Tidak Aktip') { ?>
            <option value="Aktip">Aktip</option>
            <option selected value="Tidak Aktip">Tidak Aktip</option>
            <?php } ?>
        </select>
    </div>
</div>