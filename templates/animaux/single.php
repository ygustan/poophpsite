<?php
require_once ROOT. "templates/header.php";
?>

<h1><?= $animal->getNomAnimal() ?></h1>
<p> Age : <?= $animal->getAge() ?> an(s)</p>
    <img src="https://fakeimg.pl/150x150" alt="">

<p> Description de l'animal : <?= $animal->getDescription_animal() ?></p>
<p> Date de naissance : <?= $animal->getDate_naissance() ?></p>
<p> Poids : <?= $animal->getPoids_animal() ?> kg</p>
<p> Origine : <?= $animal->getOrigine_animal() ?></p>
<p> Type : <?= $animal->getType_animal() ?></p>
<?php if ($animal->getAdopter()):?>
    <p> Date d'adoption : <?= $animal->getDate_adoption() ?></p>
<?php else:?>
    <a href="/public/index.php?method=setAdopt">Adopter</a>
<?php endif; ?>

<?php
require_once ROOT. "templates/footer.php";
?>