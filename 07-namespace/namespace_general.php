<?php

namespace General;

// permet de récupérer le code du fichier
require_once('namespace_commerce.php');

// use permet de récupérer les propriétés et méthodes des classes codées dans les namespaces

// constante magique qui permet de récupérer le nom du namespace dans lequel on code
// echo __NAMESPACE__ ;

// si je n'ecris p  s l'antislash devant PDO, la classe ne sera pas reconnue (je suis dans le namespace General, ou elle n'existe pas). Je dois sortir du namespace General pour retourner dans l'espace global

$bdd = new \PDO('mysql:host=localhost; dbname=boutique', 'root', '');