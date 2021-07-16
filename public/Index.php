<?php
define("ROOT", dirname(__DIR__). "/");
require ROOT . "vendor/autoload.php";

use App\Manager\ArticleManager;
use App\Manager\CommentaireManager;
use App\Manager\ProduitManager;
use App\Manager\Famille_produitManager;


$Produits = new ProduitManager();
$FamilleProduit = new Famille_produitManager();
echo "<body>";
echo $FamilleProduit->getFamilleProduits();
// echo $FamilleProduit->deleteFamilleProduit(2);
echo "</body>";
// $Produits->getProduits();