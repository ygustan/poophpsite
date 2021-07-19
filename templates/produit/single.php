<?php
require_once ROOT. "templates/header.php";
?>

<h1>Nom du produit :<?= $produit->getNomProduit() ?></h1>
<h4>Poids :<?= $produit->getPoidsProduit() ?>kg</h4>
<h4>Type de produit :<?= $produit->getTypeProduit() ?></h4>
<h4>Prix :<?= $produit->getPrixProduit() ?>€</h4>
<h4>Marque :<?= $produit->getMarqueProduit() ?></h4>
<h4>Origine :<?= $produit->getOrigineProduit() ?></h4>
<p><?= $produit->getDescriptionProduit() ?></p>

<?php
require_once ROOT. "templates/footer.php";
?>