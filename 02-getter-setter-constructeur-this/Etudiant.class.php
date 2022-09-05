<?php

class Etudiant{

    private $prenom;
    private $nom;

    public function __construct($prenom, $nom){
        echo "Durant l'instanciation, nous avons bien reçu l'information suivante: <br>
        prénom -> $prenom <br>
        nom -> $nom <br>";
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }

    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getNom(){
        return $this->nom;
    }
    
}

$etudiant = new Etudiant('Nacime', 'Boubekeur');
echo "Je me prénomme " . $etudiant->getPrenom() . ' ' . $etudiant->getNom() . '<br>';
