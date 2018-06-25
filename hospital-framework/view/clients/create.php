<div class="col-md-offset-4">
    <form action="<?= URL ?>clients/createSave" method="post">
        <div class="row">
            <div class="col-md-2">
                <label>Firstname</label>
                <input type="text" name="client_firstname" placeholder="Fistname" class="form-control"  required>

                <label>Lastname</label>
                <input type="text" name="client_lastname" placeholder="Lastname" class="form-control" required>
            </div>

            <div class="col-md-3">
                <label>Email</label>
                <input type="email" name="client_email" placeholder="E-mail" class="form-control" required>

                <label>Number</label>
                <input type="number" name="client_number" placeholder="Number" class="form-control" minlength="10" maxlength="10" required>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Verzenden">
    </form>
</div>