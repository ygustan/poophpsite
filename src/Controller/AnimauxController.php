<?php

namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Animaux;
use App\Model\AnimauxModel;
use App\Model\FamilleAnimaux;
use core\Database\Database;

class AnimauxController extends DefaultController {
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $model = new AnimauxModel;
        $animaux = $model->findAll();

        $this->render("animaux/index", [
            "animaux" => $animaux
        ]);
    }

    public function list()
    {
        $model = new AnimauxModel;
        $animaux = $model->findAll();

        $this->render("animaux/list", [
            "animaux" => $animaux
        ]);
    }

    public function single($id)
    {
        $model = new AnimauxModel;
        $animal = $model->findById($id);

        $this->render("animaux/single", [
            "animal" => $animal
        ]);
    }

    public function create($data)
    {
        if (!empty($data)) {
            $animal = new Animaux($data);

            var_dump($data);

            var_dump($animal);
            echo $animal->getNomAnimal();
            
            $statement = "INSERT INTO animaux (Nom_animal, Age, Date_naissance, Poids_animal, Type_animal, Description_animal, Origine_animal ) 
            VALUES (:Nom_animal, :Age, :Date_naissance, :Poids_animal, :Type_animal, :Description_animal, :Origine_animal)";

            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Nom_animal', $animal->getNomAnimal());
            $prep->bindValue(':Age', $animal->getAge());
            $prep->bindValue(':Date_naissance', $animal->getDate_naissance());
            $prep->bindValue(':Poids_animal', $animal->getPoids_animal());
            $prep->bindValue(':Type_animal', $animal->getType_animal());
            $prep->bindValue(':Description_animal', $animal->getDescription_animal());
            $prep->bindValue(':Origine_animal', $animal->getOrigine_animal());

            $prep->execute();
            
            return $this->redirectToRoute("getAnimaux");
        } else {
            /*$categorieModel = new CategorieModel;
            $categories = $categorieModel->findAll();
            $userModel = new UserModel;
            $users = $userModel->findAll();*/

            $this->render("animaux/create");
        }
    }

}