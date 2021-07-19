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

<h2>Animaux à adopter :</h2>
<?php foreach( $animaux as $animal):?>

    <?php if (!$animal->getAdopter()):?>
        <div class="animaux">
            <h2><a href="index.php?method=getAnimal&id=<?= $animal->getId_animal() ?>"><?= $animal->getNomAnimal() ?></a></h2>
            <h3><?= $animal->getDescription_animal() ?></h3>
        </div>
    <?php endif; ?>

<?php endforeach ?>
<?php
require_once ROOT. "templates/footer.php";
?>
