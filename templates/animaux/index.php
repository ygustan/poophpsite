<h1>Accueil</h1>

<ul>
    <?php foreach( $animaux as $animal):?>
        <li><a href="index.php?method=getAnimal&id=<?= $animal->getId_animal() ?>"><?= $animal->getNomAnimal() ?></a></li>
    <?php endforeach ?>
</ul>