<div class="col-md-offset-3">
    <div class="col-md-7">
        <table class="table">
            <tr>
                <th>Fistname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Number</th>
            </tr>

            <?php foreach ($data as $client) { ?>
            <tr>
                <td><?= $client['client_firstname']; ?></td>
                <td><?= $client['client_lastname']; ?></td>
                <td><?= $client['client_email']; ?></td>
                <td><?= $client['client_number']; ?></td>
                <td><a href="<?= URL ?>clients/update/<?= $client['client_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>clients/delete/<?= $client['client_id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>

        </table>
        <a href="<?= URL ?>clients/create">Toevoegen</a>
    </div>
</div>