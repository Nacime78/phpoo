<?php

// surcharge est égal à polymorphisme. Une classe enfant ehérite de la parent, mais elle peut aussi s'en différencier en la surchargeant

class A{

    protected $nombre1;
    protected $nombre2;
    protected $nombre3;

    public function calcul(){
        return 10;
    }

}

class B extends A{

    public function calcul(){
        $nb = parent::calcul();

        if($nb < 100){
            return "$nb est bien inférieur à 100";
        }else{
            return "$nb est supérieur à 100";
        }

        // autre syntaxe d'une condition, équivalente à celle du dessus
        // if($nb< 100)
        //     return "$nb est bien supérieur à 100";            
        // else
        //     return "$nb est bien inférieur à 100";
    }
    
}

$b = new B;
echo "<pre>";
var_dump(get_class_methods($b));
echo "</pre>";
echo $b->calcul();