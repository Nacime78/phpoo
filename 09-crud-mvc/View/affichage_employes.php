<?php
// echo "<pre>"; print_r($data) ;echo "</pre>";
// echo "<pre>";
// print_r($fields);
// echo "</pre>";
?>
<!-- pour recuperer les infos de la bdd et les afficher sur la page dans un tableau -->
<table class="table table-dark text-center my-5">
    <thead>
        <tr>
            <?php foreach ($fields as $values) : ?>
                <th><?= $values['Field'] ?></th>
            <?php endforeach; ?>
            <th>Voir</th>
            <th>Modif</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $dataEmployes) : ?>
            <tr>
                <td><?= implode('</td><td>', $dataEmployes) ?></td>
                <td><a href="?choixUser=select&id=<?= $dataEmployes[$id] ?>" class="btn btn-success"><i class="bi bi-eye"></i></a></td>
                <td><a href="?choixUser=update&id=<?= $dataEmployes[$id] ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a></td>
                <td><a href="?choixUser=delete&id=<?= $dataEmployes[$id] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>