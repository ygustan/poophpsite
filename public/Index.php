<?php
// require_once "produits/Produit.php";
define("ROOT", dirname(__DIR__). "/");
require ROOT . "/Core/Autoload/Autoload.php";
use Classes\Produits\Produit;
Autoload::register();


$produit1 = new Produit();

$produit1->setNomProduit("Aie");
echo $produit1->getNomProduit();
echo "1 2 3"; 