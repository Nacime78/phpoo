<?php

namespace General;

// permet de récupérer le code du fichier
require_once('namespace_commerce.php');

// use permet de récupérer les propriétés et méthodes des classes codées dans les namespaces
use Commerce1, Commerce2, Commerce3;

// constante magique qui permet de récupérer le nom du namespace dans lequel on code
// echo __NAMESPACE__ ;

// si je n'ecris pas l'antislash devant PDO, la classe ne sera pas reconnue (je suis dans le namespace General, où elle n'existe pas). Je dois sortir du namespace General pour retourner dans l'espace global
// $bdd = new \PDO('mysql:host=localhost; dbname=boutique', 'root', '');

$commande = new Commerce1\Commande;
echo "<pre>";
var_dump($commande);
echo "</pre>";

$produit = new Commerce2\Produit;
echo "<pre>";
var_dump($produit);
echo "</pre>";

$panier = new Commerce3\Panier;
echo "<pre>";
var_dump($panier);
echo "</pre>";

$produit = new Commerce3\Produit;
echo "<pre>";
var_dump($produit);
echo "</pre>";
