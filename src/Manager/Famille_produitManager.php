<?php
namespace App\Manager;
use core\Database\Database;
use core\Defaut\DefaultManager;

class Famille_produitManager extends DefaultManager{

    private $classe = "Famille_produit";

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $results = $this->db->getData("SELECT * FROM Famille_produit", $this->classe);

        $content = "<ul>";
        foreach($results as $value){
            $content .= "<li>" .$value->getNomFamilleproduit(). "<li>";
        }
        $content .= "</ul>";
        echo 1;
        return $content;
    }

    public function get(int $id){
        $results = $this->db->getData("SELECT * FROM Famille_produit WHERE Id_familleproduit = $id", $this->classe, true);

        $content = "<ul>";
        $content .= "<li>" .$results->getNomFamilleproduit(). "<li>";
        $content .= "</ul>";

        return $content;
    }

    public function save(){

    }

    public function update(int $id){

    }

    public function delete(int $id){
        $result = $this->db->prepareData("DELETE FROM Famille_produit WHERE Id_familleproduit = $id");

        return $result;
    }

}