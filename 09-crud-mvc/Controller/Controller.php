<?php

namespace Controller;

class Controller{

    private $dbEntityRepository;

    public function __construct(){
        // echo "Instanciation de la classe Controller ok <br>";

        // j'affecte dans la private dbEntityRepository, toutes les informations générées par l'instanciation de la classe EntityRepository(dont la connexion à la BDD)
        $this->dbEntityRepository = new \Model\EntityRepository;
    }

    // méthode redirect qui attend un argument (vers quel fichier) pour faire ensutie une redirection avec header(location)
    public function redirect($location){
        header('Location: ' . $location);
    }


    // méthode handleRequest (commune dans Symfony) qui permet de récupérer les actions du user en Front pour ensuite faire les bonnes requetes, puis afficher le résultat en FRONT
    public function handleRequest(){
        $choixUser = isset($_GET['choixUser']) ? $_GET['choixUser'] : NULL;
        try{
            if($choixUser == 'add' ||  $choixUser == 'update'){
                $this->save($choixUser);
            }elseif($choixUser == 'select'){
                $this->select();
            }elseif($choixUser == 'delete'){
                $this->delete();
            }else{
                $this->selectAll();
            }

            // version switch
            // switch($choixUser){
            //     case 'add' || 'update':
            //         $this->save($choixUser);
            //         break;
            //     case 'select':
            //         $this->select();
            //         break;
            //     case 'delete':
            //         $this->delete();
            //         break;
            //     default:
            //         $this->selectAll();
            //         break;
            // }
        }
        catch(\Exception $erreur){
            echo "Impossible de récupérer les infos du fichier. <br>
            Erreur:<mark>" . $erreur->getMessage() . "</mark><br>. Il y a une erreur à la ligne <strong>" . $erreur->getLine() . "</strong> dans le fichier <strong>" . $erreur->getFile() . '</strong><br>';
        }

    }

    public function render($layout, $template, $parameters = array()){
        extract($parameters);

        ob_start();
        require_once("view/$template");
        $content = ob_get_clean();

        ob_start();
        require_once("view/$layout");

        return ob_end_flush();
    }

    public function selectAll(){
        // echo "Affichage de tous les employés";
        // $resultat récupère tout ce qui a été codé dans EntityRepository.php, concernant la méthode selectAllEntityRepo
        // $resultat = $this->dbEntityRepository->selectAllEntityRepo();
        // echo '<pre>';
        // print_r($resultat);
        // echo '</pre>';

        $this->render('layout.php', 'affichage_employes.php', ['title' => 'Affichage des employés','data' => $this->dbEntityRepository->selectAllEntityRepo(), 'fields' => $this->dbEntityRepository->getFields(), 'id' => 'id' . ucfirst($this->dbEntityRepository->table)]);
    }

    public function save($choixUser){
        // echo "Affichage d'un formulaire d'insertion ou de modification";

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $values = ($choixUser == 'update') ? $this->dbEntityRepository->selectEntityRepo($id) : '';

        if($_POST){
            $this->dbEntityRepository->saveEntityRepo();
            $this->redirect('index.php');
        }

        $this->render('layout.php', 'contact_form.php', array(
            'title' => "Formulaire",
            'choixUser' => $choixUser,
            'fields' => $this->dbEntityRepository->getFields(),
            'values' => $values
        ));
    }

    public function select(){
        // echo "Affichage de la fiche d'un seul employé";
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $this->render('layout.php', 'detail_employe.php', [
            'title' => "Profil de",
            'data' => $this->dbEntityRepository->selectEntityRepo($id)
        ]);
    }

    public function delete()
    {
        // echo "Suppression de la fiche d'un employé";
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $this->dbEntityRepository->deleteEntityRepo($id);
        $this->redirect('index.php');
    }

}