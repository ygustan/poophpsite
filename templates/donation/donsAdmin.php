<?php
require_once ROOT. "templates/header.php";
?>
<h1>Les dons</h1>

<?php foreach( $dons as $don): ?>
<div class="article">
    <p><?= $don->getMontant() ?>€</p>
    <p><?= $don->getIdUtilisateur() ?></p>
</div>
<?php endforeach ?>


<?php
require_once ROOT. "templates/footer.php";
?>

