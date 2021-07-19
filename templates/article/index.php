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



<?php
require_once ROOT. "templates/footer.php";
?>