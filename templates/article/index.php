<?php
require_once ROOT. "templates/header.php";
?>


<?php foreach( $articles as $article): ?>
<div class="article">
    <h1><a href="index.php?method=getArticle&id=<?= $article->getIdArticle() ?>"><?= $article->getTitre() ?></a></h1>
    <h2><?= $article->getDateArticle() ?></h2>
    <p><?= $article->getContenu() ?></p>
</div>
<?php endforeach ?>

<h1>Animaux à adopter :</h1>
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