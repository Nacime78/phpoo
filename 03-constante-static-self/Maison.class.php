<?php

class Maison{

    public $couleur = 'blanc';
    public static $espaceTerrain = "500m²";
    private static $nbPieces = 7;
    const HAUTEUR = '10m';

    public static function getNbPieces(){
        return self::$nbPieces;
    }
        
}

$maison = new Maison;

// affiche couleur = blanc
echo "<pre>"; 
var_dump($maison);
echo "</pre>";

$maison2 = new Maison;
$maison2->couleur = 'bleu';

// affifche couleur = bleu
echo "<pre>";
var_dump($maison2);
echo "</pre>";

echo "L'espace terrain par défaut pour batir une maison est de " . Maison::$espaceTerrain . '<br>';

// modifie l'espace terrain à 1000m² de toutes les prochaines instances sans modifier les précédentes
Maison::$espaceTerrain = "1000m²";

echo "Le nombre de pièces par défaut pour une maison est de " . MAISON::GETNBPIECES() . '<br>';

// ------------------- ERREUR -----------------------
// echo $maison2->espaceTerrain . "<br>";
// echo Maison::$couleur . '<br>';
echo $maison2->getNbPieces() . '<br>'; // erreur générée mais non affichée sur le navigateur
echo $maison2::$espaceTerrain . '<br>'; // erreur générée mais non affichée sur le navigateur
// ---------------------------------------------------

echo "Par défaut, chaque maison aura une hauteur sous plafond de " . Maison::HAUTEUR;

