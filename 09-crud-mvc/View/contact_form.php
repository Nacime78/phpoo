<h2 class="text-center"><?= ($choixUser == 'add') ? "d'ajout" : "de modification" ?></h2>

<form method="POST" action="" class="col-3 my-5">
    <?php foreach ($fields as $field) : ?>
        <?php if ($field['Field'] != 'idEmploye') : ?>
            <div class="mb3">
                <label class="form-label" for="<?= $field['Field'] ?>"><?= $field['Field'] ?></label>
                <input class="form-control" value="<?= ($choixUser == 'update') ? $values[$field['Field']] : '' ?>" type="text" name="<?= $field['Field'] ?>" id="<?= $field['Field'] ?>">
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <button class="btn btn-success mt-5" type="submit">Enregistrer les modifications</button>
</form>