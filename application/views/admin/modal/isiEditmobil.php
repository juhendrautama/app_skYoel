<div class="row">
    <div class="form-group col-md-6">
        <label class="col-form-label"> Nama :</label>
        <input hidden type="text" name="idPmobil" value="<?php echo $getCarid->idPmobil ?>">
        <input class="form-control" type="text" value="<?php echo $getCarid->namaPmobil ?>" name="namaPmobil" required>
    </div>
    <div class="form-group col-md-6">
        <label class="col-form-label"> Max Penumpang :</label>
        <input class="form-control" type="text" value="<?php echo $getCarid->JumlahPenumpang ?>" name="JumlahPenumpang" required>
    </div>
</div>