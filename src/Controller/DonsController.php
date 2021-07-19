<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Dons;
use App\Model\DonsModel;
use core\Database\Database;

class DonsController extends DefaultController{

    public function __construct(){
        $this->db = new Database();
    }

    public function index()
    {
        $model = new DonsModel();
        $dons = $model->findAll();

        $this->render("donation/donsAdmin", [
            "dons" => $dons
        ]);
    }

    public function create($data)
    {
        if (!empty($data)) {
            $dons = new Dons($data);
            $dons->setIdUtilisateur(2);

            $statement = "INSERT INTO Dons (Montant, Id_utilisateur) 
            VALUES (:Montant, :Id_utilisateur)";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Montant', $dons->getMontant());
            $prep->bindValue(':Id_utilisateur', $dons->getIdUtilisateur());
            
            $prep->execute();
            
            return $this->redirectToRoute("dons");
        } else {
            $this->render("donation/dons", [
            ]);
        }
    }

}