<?php
define("ROOT", dirname(__DIR__). "/");
require ROOT . "vendor/autoload.php";
require ROOT. "router/router.php";

// include ROOT . "templates/index.php";
/*
use App\Manager\ArticleManager;
use App\Manager\CommentaireManager;
use App\Manager\ProduitManager;
use App\Manager\Famille_produitManager;


$Produits = new ProduitManager();
$FamilleProduit = new Famille_produitManager();
echo $FamilleProduit->getAll();
// echo $FamilleProduit->deleteFamilleProduit(2);
// $Produits->getProduits();
*/