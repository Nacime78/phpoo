<?php

// Une classe abstraite ne peut pas être instancié, seules les classes qui en héritent le peuvent
// contrairement à la classe final qui ne peut pas être heritée par une autre class

final class Application{

    public function executerApplication(){
        return "Je fonctionne";
    }

}

// je peux avoir une class "normale", avec dedans une méthode final
// on peut hériter de la classe, mais pas de sa méthode (pour ne pas la surcharger, modifier)

class Application2{

    final public function lancerApplication(){
        return "Je fonctionne";
    }

}

class C extends Application2{

    // message erreur cannot override (on ne peut pas surcharger)
    // public function lancerApplication(){
    //     return "je fonctionne autrement";
    // }

}