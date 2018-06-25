<div class="col-md-offset-4">
    <form action="<?= URL ?>patients/createSave" method="post">
        <div class="row">
            <div class="col-md-2">
                <label>Patient Name</label>
                <input type="text" name="patient_name" placeholder="Patient" class="form-control" required>

                <label>Client Name</label>
                <select name="client_id" class="form-control" required>
                    <?php foreach ($data["clients"] as $client) { ?>
                        <option value="<?php echo $client['client_id']; ?>" ><?php echo $client['client_firstname'] . " " . $client['client_lastname']; ?></option>
                    <?php } ?>
                </select>

                <label>Species description</label>
                <select name="species_id" class="form-control" required>
                    <?php foreach ($data["species"] as $specie) { ?>
                        <option value="<?php echo $specie['species_id']; ?>"><?php echo $specie['species_description']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md-4">
                <label>Gender</label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="patient_gender" value="male" checked required>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="patient_gender" value="female" required>Female
                </label>

                <br>
                <br>

                <label>Patient Status</label>
                <input type="text" name="patient_status" placeholder="Status" class="form-control" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>