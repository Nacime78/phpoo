<?php

class Autoload{

    public static function inclusionAuto($className){
        // str_replace va modifier les antislash en slash pour que tous les ordinateurs (Mac) puissent afficher le code. Sinon, ok pour Windows, mais pas pour Mac
        require_once __DIR__ . '/' . str_replace('\\','/', $className . '.php');
        // echo "require_once " . __DIR__ . '/' . str_replace('\\','/', $className . '.php') . '<br>';
    }

}

spl_autoload_register(array('Autoload', 'inclusionAuto'));

// $controller = new Controller\Controller;