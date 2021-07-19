<?php
require_once ROOT. "templates/header.php";
?>

<form method="POST">
    <div>
        <label for="NomProduit">Nom
            <input type="text" name="NomProduit" id="NomProduit" value="<?= $produit->getNomProduit() ?>">
        </label>
    </div>
    <div>
        <label for="QuantiteProduit">Quantité
            <input type="number" name="QuantiteProduit" id="QuantiteProduit" value="<?= $produit->getQuantiteProduit() ?>">
        </label>
    </div>
    <div>
        <label for="PoidsProduit">Poids
            <input type="text" name="PoidsProduit" id="PoidsProduit" value="<?= $produit->getPoidsProduit() ?>">
        </label>
    </div>
    <div>
        <label for="TypeProduit">Type
            <input type="text" name="TypeProduit" id="TypeProduit" value="<?= $produit->getTypeProduit() ?>">
        </label>
    </div>
    <div>
        <label for="PrixProduit">Prix
            <input type="number" name="PrixProduit" id="PrixProduit" value="<?= $produit->getPrixProduit() ?>">
        </label>
    </div>
    <div>
        <label for="DescriptionProduit">Description
            <input type="text" name="DescriptionProduit" id="DescriptionProduit" value="<?= $produit->getDescriptionProduit() ?>">
        </label>
    </div>
    <div>
        <label for="MarqueProduit">Marque
            <input type="text" name="MarqueProduit" id="MarqueProduit" value="<?= $produit->getMarqueProduit() ?>">
        </label>
    </div>
    <div>
        <label for="OrigineProduit">Origine
            <input type="text" name="OrigineProduit" id="OrigineProduit" value="<?= $produit->getOrigineProduit() ?>">
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