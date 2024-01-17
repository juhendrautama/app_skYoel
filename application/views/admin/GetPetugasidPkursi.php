<select name="idPetugas" class="form-select form-control" required>
    <?php foreach ($GetPetugasidPkursi->result() as $row) { ?>
        <option data-id="<?= $row->idPetugas; ?>" value="<?= $row->idPetugas; ?>"><?= $row->nama; ?>
        </option>
    <?php } ?>
</select>