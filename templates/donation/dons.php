<?php
require_once ROOT. "templates/header.php";
?>
<h1>Dons</h1>
<form method="POST">
    <div>
        <label for="Montant">Montant
            <input type="number" name="Montant" id="Montant">
        </label>
    </div>
    <input type="submit" value="Envoyer">
</form>


<?php
require_once ROOT. "templates/footer.php";
?>