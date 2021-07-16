<?php
namespace App\Manager;
use core\Database\Database;

class ArticleManager{

    private $classe = "Article";

    public function __construct(){
        $this->db = new Database();
    }

    public function getArticles(){
        $results = $this->db->getData("SELECT * FROM Article", $this->classe);

        $content = "<ul>";
        foreach($results as $value){
            $content .= "<li>". $value->getTitre() ."<li>";
        }
        $content .= "</ul>";

        return $content;
    }

    public function getArticle(int $id){
        $results = $this->db->getData("SELECT * FROM Article WHERE Id_article = $id", $this->classe, true);

        $content = "<ul>";
        $content .= "<li> ". $results->getTitre() ." <li>";
        $content .= "</ul>";

        return $content;
    }

    public function deleteArticle(int $id){
        $result = $this->db->prepareData("DELETE FROM Article WHERE Id_article = $id");

        return $result;
    }

}