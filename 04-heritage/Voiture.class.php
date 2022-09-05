<?php

class Voiture{

    private $litresEssence;

    public function setLitreEssence($litre){
        if(is_numeric($litre)){
            $this->litresEssence = $litre . " litre(s)";
        }else{
            trigger_error("Cela ne correspond pas à un nombre de litres", E_USER_ERROR);
        }
    }

    public function getLitreEssence(){
        return $this->litresEssence;
    }
}

class Pompes extends Voiture{

    public function donnerLitresEssence(){
        // code
    }

}

$voiture = new Voiture;
$voiture->setLitreEssence(5);
echo $voiture->getLitreEssence() . '<br>';

$pompe = new Pompes;
$pompe->setLitreEssence(500);
echo $pompe->getLitreEssence() . '<br>';