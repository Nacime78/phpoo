<?php

abstract class Vehicule{

    final public function demarrer(){
        return "Je démarre";
    }

    abstract public function carburant();

    public function nombreTestObligatoires(){
        return 100;
    }

}

class Renault extends Vehicule{

    public function carburant(){
        return "diesel";
    }

    public function nombreTestObligatoires(){
        return 30 + parent::nombreTestObligatoires();
    }

}

class Peugeot extends Vehicule{

    public function carburant(){
        return "essence";
    }

    public function nombreTestObligatoires(){
        return 70 + parent::nombreTestObligatoires();
    }

}

$renault = new renault;

echo "<pre>";
print_r(get_class_methods($renault));
echo "</pre>";

echo "<pre>";
var_dump($renault);
echo "</pre>";

echo "Je suis une Renault, " . $renault->demarrer() . ", Je fonctionne au carburant "  . $renault->carburant() . " et je dois effecteur " . $renault->nombreTestObligatoires() . " tests obligatoires de sécurité avant d'être proposé à la vente <br>";

$peugeot = new peugeot;

echo "<pre>";
print_r(get_class_methods($peugeot));
echo "</pre>";

echo "<pre>";
var_dump($peugeot);
echo "</pre>";

echo "Je suis une Peugeot, " . $peugeot->demarrer() . ", Je fonctionne au carburant "  . $peugeot->carburant() . " et je dois effecteur " . $peugeot->nombreTestObligatoires() . " tests obligatoires de sécurité avant d'être proposé à la vente <br>";