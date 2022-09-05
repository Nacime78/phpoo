<?php

// première syntaxe pour déclarer un namespace, la moins courante (avec des accolades)
// namespace Commerce{

//     class Panier{

//     }

// }

// seconde syntaxe pour déclarer un namespace, la plus utilisée

namespace Commerce1;

class Commande{

    public $nbCommandes = 3;

}

namespace Commerce2;

class Produit{
    
    public $nbProduit = 22;

}

namespace Commerce3;

class Panier{

    public $nbProduitsPanier = 2;

}

// la classe produit existe aussi dans Commerce2 mais cela est autorisé car elle est dans un namespace différent
class Produit{

    public $nbProduits = 12;

}

