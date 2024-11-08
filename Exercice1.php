<h1>Exercice 1:</h1>

<h2>Résultat</h2>


<?php
// La méthode 2 est la plus optimisée
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

// methode 1

$nbcaracteres = strlen($chaineDeCaracteres);
echo "La phrase << ".$chaineDeCaracteres." >> contient ".$nbcaracteres." caractères.<br>";

// Méthode 2

echo "La phrase << ".$chaineDeCaracteres." >> contient ".strlen($chaineDeCaracteres)." caractères.<br>";

// Méthode 3

function nbcaractere($chaineDeCaracteres)
{
    return strlen($chaineDeCaracteres);
};

echo "La phrase << ".$chaineDeCaracteres." >> contient ".nbcaractere($chaineDeCaracteres)." caractères.<br>";

?>