<?php

use App\Controller\ArticleController;
use App\Controller\ProduitController;

if(!empty($_GET) && isset($_GET["method"])){
    if($_GET["method"] === "getArticles"){
        $controller = new ArticleController();
        $controller->index();
    } else if($_GET["method"] === "getProduits"){
        $controller = new ProduitController();
        $controller->index();
    }
}