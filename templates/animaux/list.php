<?php
require_once ROOT. "templates/header.php";
?>

<a href="index.php?method=createAnimal">Ajouter un animal</a>

<?php $date_last_month = date("Y-m-d H:i:s", strtotime('-1 month')); ?>
<?php foreach( $animaux as $animal):?>

    <?php if ($animal->getAdopter() && $date_last_month < $animal->getDate_adoption()):?>
        <div class="animaux">
            <h2><a href="index.php?method=getAnimal&id=<?= $animal->getId_animal() ?>"><?= $animal->getNomAnimal() ?></a></h2>
            <h3>Adopter le <?= $animal->getDate_adoption() ?></h3>
        </div>
    <?php endif; ?>

<?php endforeach ?>


<h1>Liste des animaux à adopter :</h1>

<ul>
<?php foreach( $animaux as $animal):?>
        <?php if (!$animal->getAdopter()):?>
            <li><a href="index.php?method=getAnimal&id=<?= $animal->getId_animal() ?>"><?= $animal->getNomAnimal() ?></a></li>
        <?php endif; ?>
    <?php endforeach ?>
</ul>



<?php
require_once ROOT. "templates/footer.php";
?>