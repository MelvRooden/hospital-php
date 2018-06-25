<div class="col-md-offset-4">
    <div class="col-md-4">
        <table class="table">
        <tr>
            <th>description</th>
        </tr>

        <?php foreach ($data as $specie) { ?>
        <tr>
            <td><?= $specie['species_description']; ?></td>
            <td><a href="<?= URL ?>species/update/<?= $specie['species_id'] ?>">Edit</a></td>
            <td><a href="<?= URL ?>species/delete/<?= $specie['species_id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
        </table>
        <a href="<?= URL ?>species/create">Toevoegen</a>
    </div>
</div>