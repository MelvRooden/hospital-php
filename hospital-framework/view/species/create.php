<div class="col-md-offset-4">
    <form action="<?= URL ?>species/createSave" method="post">
        <div class="row">
            <div class="col-md-2">
                <label>Specie</label>
                <input type="text" name="species_description" placeholder="Specie" class="form-control" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>