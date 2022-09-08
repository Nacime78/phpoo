<?php

// echo '<pre>';
// print_r($data);
// echo '</pre>';

?>

<h2 class="text-center my-5"><?= ucfirst($data['nom']) . ' ' . ucfirst($data['prenom']) ?></h2>

<div class="col-6 shadow p-5 mt-5">
    <?php foreach ($data as $key => $value) : ?>
        <?php if ($key != 'idEmploye') : ?>
            <p><span class="fw-bold"><?= $key ?></span> : <?= $value ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<!-- autre syntaxe, plus détaillée, plus longue, moins dynamique, mais plus facile à formater -->

<!-- <div class="col-6 shadow p-5 mt-5">
    <p>Prénom: <?= ucfirst($data['prenom']) ?></p>
    <p>nom: <?= ucfirst($data['nom']) ?></p>
    <p>Sexe: <?= ucfirst($data['sexe']) ?></p>
    <p>Service: <?= ucfirst($data['service']) ?></p>
    <p>etc ...</p>
</div> -->