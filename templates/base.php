<?php
require_once ROOT. "templates/header.php";
?>

<h2>Les produits</h2>
<?php foreach( $results as $result): ?>
<div class="article">
    <h2><a href="index.php?method=getProduit&id=<?= $result->getIdProduit() ?>"><?= $result->getNomProduit() ?></a></h2>
    <h2><?= $result->getMarqueProduit() ?></h2>
    <p><?= $result->getDescriptionProduit() ?></p>
    <p><?= $result->getOrigineProduit() ?></p>
</div>
<?php endforeach ?>

<!--
<h2>Les animaux</h2>
<?php foreach( $animaux as $animal): ?>
<div class="article">
    <h2><a href="index.php?method=getProduit&id=<?= $animal->getIdProduit() ?>"><?= $animal->getNomProduit() ?></a></h2>
    <h2><?= $animal->getMarqueProduit() ?></h2>
    <p><?= $animal->getDescriptionProduit() ?></p>
    <p><?= $animal->getOrigineProduit() ?></p>
</div>
<?php endforeach ?>
-->
<?php
require_once ROOT. "templates/footer.php";
?>
