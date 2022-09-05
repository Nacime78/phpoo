<?php

// on teste du code dans le bloc try. S'il est bon, on continue d'exécuter le code normalement
try{
    $pdo = new PDO('mysql:host=localhost; dbname=boutique', 'root', '');
    echo "Connexion établie";
}

// en cas d'erreur dans le bloc try, on est reversé dans le catch qui va afficher un message d'erreur personnel (au lieu de celui du navigateur)
catch(PDOException $erreur){
    // echo "<pre>";
    // print_r($erreur);
    // echo "</pre>";

    // echo "<pre>";
    // print_r(get_class_methods($erreur));
    // echo "</pre>";

    echo "Erreur: <marK>" . $erreur->getMessage() . "</marK><br>Problème pour se connecter à la base de données à la ligne " . $erreur->getLine() . " dans le fichier " . $erreur->getFile();
}