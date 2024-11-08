<h1>Exercice 6:</h1>

<h2>Résultat</h2>



<?php
// La méthode 1 est la plus optimisée
$prix = 9.99;
$tva = 0.20;
$quantite = 5;

// Méthode 1:

echo "Prix unitaire de l'aticle : ".$prix." € <br>";
echo "Quantité : ".$quantite." € <br>";
echo "Taux de TVA : ".$tva." € <br>";
$facture = $prix*$quantite*($tva+1);
echo "Le montant de la facture à régler est de : ".$facture." €<br>";

// Méthode 2:

echo "Prix unitaire de l'aticle : ".$prix." € <br>"."Quantité : ".$quantite." € <br>"."Taux de TVA : ".$tva." € <br>";
function calculFacture($prix,$quantite,$tva)
{
    return $prix*$quantite*(1+$tva);
};
echo "Le montant de la facture à régler est de : ".calculFacture($prix,$quantite,$tva)." €<br>"

?>