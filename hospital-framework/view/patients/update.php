<?php $patient = $dataPatient->fetch_assoc(); ?>
<div class="col-md-offset-4">
    <form action="<?= URL ?>patients/updateSave" method="post">
        <input name="patient_id" type="hidden" value="<?php echo $patient['patient_id'] ?>">
        <div class="row">
            <div class="col-md-2">
                <label>Patient Name</label>
                <input type="text" name="patient_name" placeholder="patient" value="<?php echo $patient['patient_name'] ?>" class="form-control" required>

            <label>Client Name</label>
            <select name="client_id" class="form-control" required>
                <?php foreach ($data["clients"] as $clients) { ?>
                    <option value="<?php echo $clients['client_id']; ?>" <?php if($patient['client_id'] == $clients['client_id']){echo "selected";}?> > <?php echo $clients['client_firstname'] . " " . $clients['client_lastname']; ?></option>
                <?php } ?>
            </select>

            <label>Species description</label>
            <select name="species_id" class="form-control" required>
                <?php foreach ($data["species"] as $species) { ?>
                    <option value="<?php echo $species['species_id']; ?>" <?php if($patient['species_id'] == $species['species_id']){echo "selected";}?> > <?php echo $species['species_description']; ?></option>
                <?php } ?>
            </select>
            </div>

            <div class="col-md-4">
                <label>Gender</label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="patient_gender" value="male" <?php if($patient['patient_gender'] == "male"){echo "checked";}?> required>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="patient_gender" value="female"  <?php if($patient['patient_gender'] == "female"){echo "checked";}?> required>Female
                </label>

                <br>
                <br>

        <label>Patient Status</label>
        <input type="text" name="patient_status" placeholder="Status" value="<?php echo $patient['patient_status'] ?>" class="form-control" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>