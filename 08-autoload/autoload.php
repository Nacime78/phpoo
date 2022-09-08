<?php

function inclusionAuto($nomDeClass){

    require_once($nomDeClass . '.class.php');
    echo "<pre>";
    var_dump($nomDeClass);
    echo "</pre>";
    echo "J'entre bien dans la fonction de la classe A";

}

spl_autoload_register('inclusionAuto');

$a = new A;