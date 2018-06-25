<div class="col-md-offset-2">
    <div class="col-md-10">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Species</th>
                <th>Client</th>
                <th>Gender</th>
                <th>Status</th>
            </tr>

            <?php foreach ($data as $patient) { ?>
            <tr>
                <td><?= $patient['patient_name']; ?></td>
                <td><?= $patient['species_description']; ?></td>
                <td><?= $patient['client_firstname'] . " " . $patient['client_lastname']; ?></td>
                <td><?= $patient['patient_gender']; ?></td>
                <td><?= $patient['patient_status']; ?></td>
                <td><a href="<?= URL ?>patients/update/<?= $patient['patient_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>patients/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    <a href="<?= URL ?>patients/create">Toevoegen</a>
    </div>
</div>