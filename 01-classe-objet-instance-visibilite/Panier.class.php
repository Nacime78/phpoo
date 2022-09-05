<?php 
# Par convention les fichiers contenant une class commencent par une maj
class Panier{

    public $nbProduits;

    public function ajouterProduit(){
        return "Le produit a bien été ajouté";
    }

    protected function retirerProduit(){
        return "Le produit a bien été retiré";
    }

    private function afficherProduit(){
        return "Affiche tous les produits";
    }

}

$panier = new Panier;

echo "<pre>";
print_r(get_class_methods($panier));
echo "</pre>";

echo "<pre>";
var_dump($panier);
echo "</pre>";

$panier->nbProduits = 5;
echo "<pre>";
var_dump($panier);
echo "</pre>";

echo "Vous avez actuellement dans votre panier " . $panier->nbProduits . " articles <br>";

// une classe de visibilité public est visible, disponible partout (dans sa class, dans une classe en héritage et à l'extérieur de sa classe)
// une classe de visibilité protected est disponible dans sa classe comme une classe qui en hérite (extends), mais pas à l'extérieur de sa classe
// une classe de visibilité private n'est disponible que dans sa classe (pas dans une classe qui hérite, pas à l'extérieur)
echo $panier->ajouterProduit() . '<br>';
// echo $panier->retirerProduit() . '<br>';
// echo $panier->afficherProduit() . '<br>';

class Produit extends Panier{
    public function test(){
        return $this->retirerProduit();
        // return $this->afficherProduit();
    }
}

$panier2 = new Panier;
echo "<pre>";
var_dump($panier2);
echo "</pre>";