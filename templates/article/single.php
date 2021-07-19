<?php
require_once ROOT. "templates/header.php";
?>

<h1>Titre : <?= $article->getTitre() ?></h1>
<img src="" alt="">
<h4>Date :<?= $article->getDateArticle() ?></h4>
<p><?= $article->getContenu() ?></p>

<small>Cet article est rédigé par <?= $article->getIdUtilisateur() ?></small>



<?php
require_once ROOT. "templates/footer.php";
?>