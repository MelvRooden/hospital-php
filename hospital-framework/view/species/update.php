<?php $specie = $data->fetch_assoc(); ?>
<div class="col-md-offset-4">
    <form action="<?= URL ?>species/updateSave" method="post">
        <input type="hidden" name="species_id" value="<?= $specie['species_id'] ?>">
        <div class="row">
            <div class="col-md-2">
                <label>Specie</label>
                <input type="text" name="species_description" placeholder="Specie" value="<?= $specie['species_description'] ?>" class="form-control" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>