<?php
require_once ROOT. "templates/header.php";
?>
<h1>Les dons</h1>
<?php
$total = 0;
?>
<?php foreach( $dons as $don): ?>
<div class="article">
    <p><?= $don->getMontant() ?>€</p>
    <p><?= $don->getIdUtilisateur() ?></p>
</div>
<?php 
$total += $don->getMontant(); 

?>
<?php endforeach ?>

<p>Total : <?= $total ?>€</p>
<?php
require_once ROOT. "templates/footer.php";
?>

