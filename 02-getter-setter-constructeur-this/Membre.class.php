<?php

class Membre{

    private $prenom;
    private $nom;

    // setPrenom{
    public function setPrenom($newPrenom){
        if(is_string($newPrenom)){
            $this->prenom = $newPrenom;
        }else{
            trigger_error("Cela ne correspond pas à un prénom", E_USER_ERROR);
        }
    }
    // getPrenom}
    public function getPrenom(){
        return $this->prenom;
    }
    // setNom{
    public function setNom($newNom){
        if (is_string($newNom)) {
            $this->nom = $newNom;
        } else {
            trigger_error("Cela ne correspond pas à un nom", E_USER_ERROR);
        }
    }
    // getNom}
    public function getNom(){
        return $this->nom;
    }

    // public function addUser(){
    //     $ajouterUser = $pdo->prepare("INSERT INTO membre (prenom, nom) VALUES (". $this->getPrenom() .", ". $this->getNom() .") ");
    // }
}

$membre = new Membre;

$membre->setPrenom('Nacime');
echo $membre->getPrenom() . '<br>';

$membre->setNom('Boubekeur');
echo "Je suis " . $membre->getPrenom() . " " . $membre->getNom() . '<br>';