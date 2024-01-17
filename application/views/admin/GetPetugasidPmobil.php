<select name="idPetugas" class="form-select form-control" required>
    <option value="">Pillih Petugas</option>
    <?php foreach ($GetPetugasidPmobil->result() as $row) { ?>
        <option data-id="<?= $row->idPetugas; ?>" value="<?= $row->idPetugas; ?>"><?= $row->nama; ?>
        </option>
    <?php } ?>
</select>