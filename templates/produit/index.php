<?php
require_once ROOT. "templates/header.php";
?>

<?php foreach( $produits as $produit): ?>
<div class="article">
    <h1><a href="index.php?method=getProduit&id=<?= $produit->getIdProduit() ?>"><?= $produit->getNomProduit() ?></a></h1>
    <h2><?= $produit->getMarqueProduit() ?></h2>
    <p><?= $produit->getDescriptionProduit() ?></p>
    <p><?= $produit->getOrigineProduit() ?></p>
    <button><a href="index.php?method=deleteProduit&id=<?= $produit->getIdProduit() ?>">Delete</a></button>
</div>
<?php endforeach ?>

<?php
require_once ROOT. "templates/footer.php";
?>