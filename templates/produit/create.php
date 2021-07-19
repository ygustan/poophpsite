<?php
require_once ROOT. "templates/header.php";
?>

<form method="POST">
    <div>
        <label for="NomProduit">Nom
            <input type="text" name="NomProduit" id="NomProduit">
        </label>
    </div>
    <div>
        <label for="QuantiteProduit">Quantité
            <input type="number" name="QuantiteProduit" id="QuantiteProduit">
        </label>
    </div>
    <div>
        <label for="PoidsProduit">Poids
            <input type="text" name="PoidsProduit" id="PoidsProduit">
        </label>
    </div>
    <div>
        <label for="TypeProduit">Type
            <input type="text" name="TypeProduit" id="TypeProduit">
        </label>
    </div>
    <div>
        <label for="PrixProduit">Prix
            <input type="number" name="PrixProduit" id="PrixProduit">
        </label>
    </div>
    <div>
        <label for="DescriptionProduit">Description
            <input type="text" name="DescriptionProduit" id="DescriptionProduit">
        </label>
    </div>
    <div>
        <label for="MarqueProduit">Marque
            <input type="text" name="MarqueProduit" id="MarqueProduit">
        </label>
    </div>
    <div>
        <label for="OrigineProduit">Origine
            <input type="text" name="OrigineProduit" id="OrigineProduit">
        </label>
    </div>
    <div>
        <label for="IdFamilleproduit">Famille de produit
            <select name="IdFamilleproduit" id="IdFamilleproduit">
                <?php foreach($familles as $famille): ?>
                    <option value="<?= $famille->getIdFamilleproduit() ?>"><?= $famille->getNomFamilleproduit() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>

    <input type="submit" value="Envoyer">
</form>


<?php
require_once ROOT. "templates/footer.php";
?>