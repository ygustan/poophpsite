<?php
require_once ROOT. "templates/header.php";
?>

<?php foreach( $produits as $produit): ?>
<div class="article">
    <h1><a href="index.php?method=getProduit&id=<?= $produit->getIdProduit() ?>"><?= $produit->getNomProduit() ?></a></h1>
    <h2><?= $produit->getMarqueProduit() ?></h2>
    <p><?= $produit->getDescriptionProduit() ?></p>
    <p><?= $produit->getOrigineProduit() ?></p>
    <?php if (isset($_SESSION["admin"])):?>
        <button><a href="index.php?method=updateProduit&id=<?= $produit->getIdProduit() ?>">Update</a></button>
        <button><a href="index.php?method=deleteProduit&id=<?= $produit->getIdProduit() ?>">Delete</a></button>
    <?php endif; ?>
</div>
<?php endforeach ?>

<?php
require_once ROOT. "templates/footer.php";
?>