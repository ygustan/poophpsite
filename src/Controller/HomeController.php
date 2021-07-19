<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use core\Database\Database;

class HomeController extends DefaultController{

    public function __construct(){
        $this->db = new Database();
    }

    public function index()
    {
        // $statement = "SELECT * FROM Produit ORDER BY Id_produit DESC limit 5";
        // $prep = $this->db->getPDO()->prepare($statement);

        $results = $this->db->getData("SELECT * FROM Produit ORDER BY Id_produit DESC limit 5", "Produit");
        // $animaux = $this->db->getData("SELECT * FROM Animaux ORDER BY Id_animaux DESC limit 5", "Animaux");

        $this->render("base", [
            "results" => $results,
            // "animaux" => $animaux
        ]);
    }
}