<?php
require_once ROOT. "templates/header.php";
?>

<h1>Nom du produit :<?= $produit->getNomProduit() ?></h1>
<h4>Poids :<?= $produit->getPoidsProduit() ?>kg</h4>
<h4>Type de produit :<?= $produit->getTypeProduit() ?></h4>
<h4>Prix :<?= $produit->getPrixProduit() ?>€</h4>
<h4>Marque :<?= $produit->getMarqueProduit() ?></h4>
<h4>Origine :<?= $produit->getOrigineProduit() ?></h4>
<p><?= $produit->getDescriptionProduit() ?></p>

<h2>Ajouter au panier</h2>
<label for="QuantiteProduit">Quantité
    <input type="number" name="QuantiteProduit" id="QuantiteProduit">
</label>
<button onclick="panier(<?= $produit->getIdProduit() ?>)">Ajouter</button>


<script>
    function panier($id){
        var produit = $id;
        var qte = document.getElementById("QuantiteProduit").value;

        if(qte == ""){
            qte = 1;
        }
        console.log(produit);
        console.log(qte);

        const params = new URLSearchParams({
            produit: produit,
            quantite: qte
        });

        var url = window.location.origin;
        url += "/test/public/index.php?";
        url += params.toString();
        console.log(url);

        
    }
</script>


<?php
require_once ROOT. "templates/footer.php";
?>