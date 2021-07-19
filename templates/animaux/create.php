<?php
require_once ROOT. "templates/header.php";
?>

<h3>Informations de l'animal :</h3> 
<form method="POST">
    <div>
        <label for="NomAnimal">Nom* :
            <input type="text" name="NomAnimal" id="NomAnimal" value="">
        </label>
    </div>
    <div>
        <label for="Age">Age* :
            <input type="number" name="Age" id="Age">
        </label>
    </div>
    <div>
        <label for="Date_naissance">Date de naissance* :
            <input type="date" name="Date_naissance" id="Date_naissance">
        </label>
    </div>
    <div>
        <label for="Poids_animal">Poids* :
            <input type="number" name="Poids_animal" id="Poids_animal">
        </label>
    </div>
    <div>
        <label for="Type_animal">Type* :
            <input type="text" name="Type_animal" id="Type_animal">
        </label>
    </div>
    <div>
        <label for="Description_animal">Description* :
            <input type="text" name="Description_animal" id="Description_animal">
        </label>
    </div>
    <div>
        <label for="Origine_animal">Origine* :
            <input type="text" name="Origine_animal" id="Origine_animal">
        </label>
    </div>





    <div>
        <label for="categorieId"> Famille de l'animal
            <select name="categorieId" id="categorieId">
                <?php foreach($categories as $categorie): ?>
                    <option value="<?= $categorie->getId() ?>"><?= $categorie->getName() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <input type="submit" value="Envoyer">
</form>



<?php
require_once ROOT. "templates/footer.php";
?>