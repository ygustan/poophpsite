<?php
namespace App\Manager;
use vendor\Database\Database;

class CommentaireManager{

    private $classe = "Commentaire";

    public function __construct(){
        $this->db = new Database();
    }

    public function getCommentaires(){
        $results = $this->db->getData("SELECT * FROM Commentaire", $this->classe);

        $content = "<ul>";
        foreach($results as $value){
            $content .= "<li> $value->Com_contenu <li>";
        }
        $content .= "</ul>";

        return $content;
    }

    public function getCommentaire(int $id){
        $results = $this->db->getData("SELECT * FROM Commentaire WHERE Id_commentaire = $id", $this->classe, true);

        $content = "<ul>";
        $content .= "<li> $results->Com_contenu <li>";
        $content .= "</ul>";

        return $content;
    }

    public function deleteCommentaire(int $id){
        $result = $this->db->prepareData("DELETE FROM Commentaire WHERE Id_commentaire = $id");

        return $result;
    }

}