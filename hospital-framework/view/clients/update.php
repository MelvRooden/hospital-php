<?php $client = $data->fetch_assoc(); ?>
<div class="col-md-offset-4">
    <form action="<?= URL ?>clients/updateSave" method="post">
        <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
        <div class="row">
            <div class="col-md-2">
                <label>Firstname</label>
                <input type="text" name="client_firstname" value="<?= $client['client_firstname'] ?>" class="form-control" required>

                <label>Lastname</label>
                <input type="text" name="client_lastname" value="<?= $client['client_lastname'] ?>" class="form-control" required>
            </div>

            <div class="col-md-3">
                <label>Email</label>
                <input type="email" name="client_email" value="<?= $client['client_email'] ?>" class="form-control" required>

                <label>Number</label>
                <input type="number" name="client_number" value="<?= $client['client_number'] ?>" class="form-control" min="0600000000" maxlength="10" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>