<h1>Exercice 5:</h1>

<h2>Résultat</h2>



<?php
// La méthode 2 est la plus optimisée

$francs = 100;
// Méthode 1:

echo "Montant en fancs : ".$francs."<br>";
$euros = number_format($francs/6.5596,2);
echo $francs." francs = ".$euros." € <br>";

// Méthode 2:

echo "Montant en fancs : ".$francs."<br>".$francs." francs = ".number_format($francs/6.5596,2)." € <br>";

// Méthode 3:

echo "Montant en fancs : ".$francs."<br>";
function conversionFrancsEuros ($francs)
{
    return number_format($francs/6.5596,2);
};
echo $francs." francs = ".conversionFrancsEuros($francs)." € <br>";
?>