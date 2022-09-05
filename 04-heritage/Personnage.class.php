<?php

class Personnage{

    protected function deplacement(){
        return "je me déplace très vite";
    }

    public function saut(){
        return "je saute très haut";
    }
}

class Mario extends Personnage{

    public function quiSuisJe(){
        return "Je suis Mario, " . $this->deplacement() . " et " . $this->saut() . '<br>';    
    }

}

class Bowser extends Personnage{
    
    public function quiSuisJe(){
        return "Je suis Bowser, " . $this->deplacement() . " mais " . $this->saut() . '<br>';
    }

    public function saut(){
        return "je ne saute pas très haut";
    }
}

$mario = new Mario;

echo "<pre>";
print_r(get_class_methods($mario));
echo "</pre>";

echo $mario->quiSuisJe() . '<br>';

$bowser = new Bowser;
echo $bowser->quiSuisJe();

