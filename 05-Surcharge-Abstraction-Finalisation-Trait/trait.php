<?php
// une classe ne peut pas hériter de plusieurs autres classes, mais elle peut hériter de plusieurs traits en même temps

trait TPanier{

    public $nbProduits;

    public function afficheProduits(){
        return "J'affiche tous les produits <br>";
    }

}

trait TMembre{

    public function afficheUsers(){
        return "J'affiche tous les utilisateurs <br>";
    }

}

// on ne peut pas instancier un trait. code ci-dessous génère une erreur; 
// $user = new TMembre;

class Produit{

    public $prix;

}

// une classe peut hériter d'une autre classe, mais aussi de traits
class Site extends Produit{

    // syntaxe pour hériter d'un trait (ave use et pas extends)
    use TPanier, TMembre;
}

$site = new Site;

echo "<pre>";
print_r(get_class_methods($site));
echo "</pre>";

echo "<pre>";
var_dump($site);
echo "</pre>";