<?php

namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\User;
use App\Model\UserModel;
use App\Model\FamilleUser;
use core\Database\Database;

class UserController extends DefaultController {
    
    public function __construct()
    {
        $this->db = new Database;
    }

    /*public function index()
    {
        $model = new UserModel;
        $user = $model->findAll();

        $this->render("user/index", [
            "user" => $user
        ]);
    }

    public function list()
    {
        $model = new UserModel;
        $user = $model->findAll();

        $this->render("user/list", [
            "user" => $user
        ]);
    }

    public function single($id)
    {
        $model = new UserModel;
        $user = $model->findById($id);

        $this->render("user/single", [
            "user" => $user
        ]);
    }

    public function delete($id)
    {
        $model = new UserModel();
        $produit = $model->deleteById($id);

        return $this->redirectToRoute("getUser");
    }

    public function adopt($id)
    {
        $model = new UserModel;
        $user = $model->findById($id);

        

        var_dump($user);
        echo $user->getId_user();
        
        $today = date("Y-m-d H:i:s");    
        $user->setAdopter($today);
        
        $statement = "UPDATE user SET Adopter = :Adopter, Date_adoption = :Date_adoption
        WHERE Id_user = :Id_user";

        $prep = $this->db->getPDO()->prepare($statement);
        $prep->bindValue(':Id_user', $user->getId_user());
        $prep->bindValue(':Date_adoption', $user->getAdopter());
        $prep->bindValue(':Adopter', true);

        $prep->execute();
        
        return $this->redirectToRoute("getUser");
    }*/

    public function register($data)
    {
        if (!empty($data)) {
            $user = new User($data);

            //var_dump($data);

            var_dump($user);
            echo $user->getName();

            $today = date("Y-m-d H:i:s");    
            $user->setDate_creation($today);
            
            $statement = "INSERT INTO utilisateur (Nom, Email, Motdepasse, Date_creation) 
            VALUES (:Nom, :Email, :Motdepasse, :Date_creation)";

            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Nom', $user->getName());
            $prep->bindValue(':Email', $user->getEmail());
            $prep->bindValue(':Motdepasse', $user->getMotdepasse());
            $prep->bindValue(':Date_creation', $user->getDate_creation());

            $prep->execute();
            
            return $this->redirectToRoute("getUser");
        } else {
            /*$categorieModel = new CategorieModel;
            $categories = $categorieModel->findAll();
            $userModel = new UserModel;
            $users = $userModel->findAll();*/

            $this->render("user/register");
        }
    }

}