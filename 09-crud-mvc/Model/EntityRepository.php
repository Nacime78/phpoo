<?php

namespace Model;

class EntityRepository{

    private $pdo;
    public $table;

    public function getPdo(){
        // si $this ne point pas vers $pdo, cela veut dire que je ne suis pas connecté, je dois donc coder la procédure de connexion dans un try catch
        if(!$this->pdo){
            libxml_use_internal_errors(true);
            try{
                // simple_load_file permet d'extraire les informations d'un fichier xml
                $xml = simplexml_load_file('App/config.xml');
                // echo "<pre>";
                // print_r($xml);
                // echo "</pre>";

                $this->table = $xml->table;

                try{

                    $this->pdo = new \PDO("mysql:host=$xml->host;dbname=$xml->dbname", "$xml->user", "$xml->password", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                    // echo "Connexion établie <br>";

                }catch(\PDOException $erreur){

                    echo "Impossible de récupérer les infos du fichier. <br>
                    Erreur:<mark>" . $erreur->getMessage() . "</mark><br>. Il y a une erreur à la ligne <strong>" . $erreur->getLine() . "</strong> dans le fichier <strong>" . $erreur->getFile() . '</strong><br>';

                }

            }catch(\PDOException $erreur){

                echo "Impossible de récupérer les infos du fichier. <br>
                Erreur:<mark>" . $erreur->getMessage() . "</mark><br>. Il y a une erreur à la ligne <strong>" . $erreur->getLine() . "</strong> dans le fichier <strong>" . $erreur->getFile() . '</strong><br>';

            }
        }
        // else, $this pointe vers $pdo, je suis connecté, je stocke avec return les informations liées à la connexion
        return $this->pdo;
    }

    // méthode qui va faire la requête SQL pour récupérer les infos concernant tous les employés en BDD
    public function selectAllEntityRepo(){
        // $this->getPdo récupère les infos stockées dans pdo (équivalent à $data = $pdo->query)
        $data = $this->getPdo()->query("SELECT * FROM $this->table");
        $afficheAll = $data->fetchAll(\PDO::FETCH_ASSOC);
        return $afficheAll;
    }

    public function saveEntityRepo(){
        // echo "Affichage d'un formulaire d'insertion ou de modification";

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $data = $this->getPdo()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
        }else{
            $data = $this->getPdo()->query("INSERT INTO " . $this->table . '(' .implode(',', array_keys($_POST)) . ') VALUES ('. "'" . implode("','", $_POST) . "'" . ')');
        }

    }

    public function selectEntityRepo($id){
        // echo "Affichage de la fiche d'un seul employé";
        $data = $this->getPdo()->query("SELECT * FROM $this->table WHERE id" . ucfirst($this->table) . "=" . (int) $id);
        $afficheEmploye = $data->fetch(\PDO::FETCH_ASSOC);
        return $afficheEmploye;
    }

    public function deleteEntityRepo($id)
    {
        // echo "Suppression de la fiche d'un employé";
        $this->getPdo()->query("DELETE FROM " . $this->table . ' WHERE idEmploye = ' . (int) $id);
    }

    public function getFields(){
        $data = $this->getPdo()->query("DESC " . $this->table);
        $afficheEntetes = $data->fetchAll(\PDO::FETCH_ASSOC);
        return $afficheEntetes;
    }
}

$entity = new EntityRepository;
$entity->getPdo();