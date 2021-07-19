<?php

use App\Controller\ArticleController;
use App\Controller\ProduitController;
use App\Controller\DonsController;
use App\Controller\HomeController;

if(!empty($_GET) && isset($_GET["method"])){
    if($_GET["method"] === "getArticles"){
        $controller = new ArticleController();
        $controller->index();
    } else if($_GET["method"] === "getArticle" && isset($_GET["id"])) {
        $controller = new ArticleController();
        $controller->single($_GET["id"]);
    } else if($_GET["method"] === "getProduits"){
        $controller = new ProduitController();
        $controller->index();
    } else if($_GET["method"] === "getProduit" && isset($_GET["id"])) {
        $controller = new ProduitController();
        $controller->single($_GET["id"]);
    } else if($_GET["method"] === "createProduit"){
        $controller = new ProduitController();
        $controller->create($_POST);
    }else if($_GET["method"] === "updateProduit" && isset($_GET["id"])){
        $controller = new ProduitController();
        $controller->update($_GET["id"],$_POST);
    }else if($_GET["method"] === "deleteProduit" && isset($_GET["id"])){
        $controller = new ProduitController();
        $controller->delete($_GET["id"]);
    } else if($_GET["method"] === "dons"){
        $controller = new DonsController();
        $controller->create($_POST);
    } else if($_GET["method"] === "donsAdmin"){
        $controller = new DonsController();
        $controller->index();
    }
} else {
    $controller = new HomeController();
    $controller->index();
}