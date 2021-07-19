<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use core\Database\Database;
use App\Entity\Utilisateur;
use App\Model\Utilisateur;

class LoginController extends DefaultController{

    public function __construct(){
        $this->db = new Database();
    }

    public function login($data)
    {
        if(!empty($data)){
            var_dump($data);

            $user = new Utilisateur($data);

            $statement = "SELECT * FROM Utilisateur WHERE Email = :Email AND Motdepasse = :Motdepasse";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Email', $user->getNomProduit());
            $prep->bindValue(':Motdepasse', $user->getQuantiteProduit());
            $prep->execute();
            $valide = $prep->fetch();

            if($valide){
                session_start();
                $_SESSION['username'] = $user->getNomProduit();

                $statement = "SELECT * FROM utilisateur WHERE Email = :Email AND Est_admin = 1";
                $prep = $this->db->getPDO()->prepare($statement);
                $prep->bindValue(':Email', $user->getQuantiteProduit());
                $prep->execute();
                $valideAdmin = $prep->fetch();

                if($valideAdmin){
                    $_SESSION['admin'] = true;
                }

                return $this->redirectToRoute("index");
            }else {
                return $this->redirectToRoute("login");
            }
            
        }

        $this->render("login/login");
    }

    public function deconnexion()
    {
        session_start();
        session_unset();
        session_destroy();

        return $this->redirectToRoute("login");
    }
}

