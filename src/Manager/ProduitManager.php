<?php
namespace App\Manager;
use vendor\Database\Database;

class ProduitManager{

    private $classe = "Produit";

    public function __construct(){
        $this->db = new Database();
    }

    public function getProduits(){
        $results = $this->db->getData("SELECT * FROM Produit", $this->classe);

        $content = "<ul>";
        foreach($results as $value){
            $content .= "<li>" .$value->getNomProduit(). "<li>";
        }
        $content .= "</ul>";

        return $content;
    }

    public function getFamilleProduit(int $id){
        $results = $this->db->getData("SELECT * FROM Produit WHERE Id_produit = $id", $this->classe, true);

        $content = "<ul>";
        $content .= "<li>" .$results->getNomProduit(). "<li>";
        $content .= "</ul>";

        return $content;
    }

    public function deleteProduit(int $id){
        $result = $this->db->prepareData("DELETE FROM Produit WHERE Id_produit = $id");

        return $result;
    }

}