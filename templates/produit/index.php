<?php
require_once ROOT. "templates/header.php";
?>

<?php foreach( $produits as $produit): ?>
<div class="article">
    <h1><a href="public/index.php?page=getProduit&id=<?= $produit->getIdProduit() ?>"><?= $produit->getNomProduit() ?></a></h1>
    <h2><?= $produit->getMarqueProduit() ?></h2>
    <p><?= $produit->getDescriptionProduit() ?></p>
    <p><?= $produit->getOrigineProduit() ?></p>
</div>
<?php endforeach ?>

<?php
require_once ROOT. "templates/footer.php";
?>