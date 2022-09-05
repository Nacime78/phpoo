<?php

class Voiture{

    private $litresEssence;

    public function setLitreEssence($litre){
        if(is_numeric($litre)){
            $this->litresEssence = $litre;
        }else{
            trigger_error("Cela ne correspond pas à un nombre de litres", E_USER_ERROR);
        }
    }

    public function getLitreEssence(){
        return $this->litresEssence;
    }
}

class Pompes extends Voiture{

    public function donnerLitresEssence(Voiture $vehicule){
        $this->setLitreEssence($this->getLitreEssence() - (50 - $vehicule->getLitreEssence()));
        // echo "<pre>";
        // var_dump($vehicule);
        // echo "</pre>";
        $vehicule->setLitreEssence($vehicule->getLitreEssence() + (50 - $vehicule->getLitreEssence()));
    }

}

$voiture = new Voiture;
$voiture->setLitreEssence(5);
echo "Ma voiture a dans son réservoir " . $voiture->getLitreEssence() . " litres d'essence" . '<br>';

$pompe = new Pompes;
$pompe->setLitreEssence(500);
echo "Ma pompe a dans son réservoir " . $pompe->getLitreEssence() . " litres d'essences" . '<br>';

$pompe->donnerLitresEssence($voiture);
echo "Ma voiture a désormais dans son réservoir " . $voiture->getLitreEssence() . " litres d'essence" . '<br>';
echo "Ma pompe a désormais dans son réservoir " . $pompe->getLitreEssence() . " litres d'essence" . '<br>';