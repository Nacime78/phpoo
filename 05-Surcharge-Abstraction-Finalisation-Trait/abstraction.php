<?php

abstract class Joueur{

    private $pseudo;
    private $age;

    public function seConnecter(){
        return $this->etreMajeur();
    }

    abstract function etreMajeur();

    abstract function devise();

}

class JoueurFr extends Joueur{

    public function etreMajeur(){
        return 18;
    }

    public function devise(){
        return '€';
    }

}

class JoueurEUA extends Joueur{

    public function etreMajeur(){
        return 21;
    }

    public function devise(){
        return '$';
    }

}

$joueurFr = new JoueurFr;
echo "En France pour pouvoir jouer à des paris en ligne il faut avoir un âge minimum de " . $joueurFr->etreMajeur() . " ans et utiliser comme devise l'" . $joueurFr->devise() . '<br>';

$joueurEUA = new JoueurEUA;
echo "Aux Etats-Unis pour pouvoir jouer à des paris en ligne il faut avoir un âge minimum de " . $joueurEUA->etreMajeur() . " ans et utiliser comme devise l'" . $joueurEUA->devise();
