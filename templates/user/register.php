<?php
require_once ROOT. "templates/header.php";
?>

<h3>Informations de l'utilisateur:</h3> 
<form method="POST">
    <div>
        <label for="Nom">Nom* :
            <input type="text" name="Nom" id="Nom" value="">
        </label>
    </div>
    <div>
        <label for="Email">Email* :
            <input type="mail" name="Email" id="Email">
        </label>
    </div>
    <div>
        <label for="Motdepasse">Mot de passe* :
            <input type="password" name="Motdepasse" id="Motdepasse">
        </label>
    </div>
    <input type="submit" value="Enregistrer">
</form>



<?php
require_once ROOT. "templates/footer.php";
?>