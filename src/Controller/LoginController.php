<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use core\Database\Database;
use App\Entity\User;
use App\Model\UserModel;

class LoginController extends DefaultController{

    public function __construct(){
        $this->db = new Database();
    }

    public function login($data)
    {
        if(!empty($data)){
            $user = new User($data);

            $statement = "SELECT * FROM Utilisateur WHERE Email = :Email AND Motdepasse = :Motdepasse";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Email', $user->getEmail());
            $prep->bindValue(':Motdepasse', $user->getMotdepasse());
            $prep->execute();
            $valide = $prep->fetch();

            if($valide){
                session_start();
                $_SESSION['email'] = $user->getEmail();

                $statement = "SELECT * FROM utilisateur WHERE Email = :Email AND Est_admin = 1";
                $prep = $this->db->getPDO()->prepare($statement);
                $prep->bindValue(':Email', $user->getEmail());
                $prep->execute();
                $valideAdmin = $prep->fetch();

                if($valideAdmin){
                    $_SESSION['admin'] = true;
                }

                return $this->redirectToRoute("getArticles");
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

