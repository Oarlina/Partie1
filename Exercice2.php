<h1>Exercice 2:</h1>

<h2>Résultat</h2>

<?php
// la méthode 2 est la plus optimisée
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

// Méthode1

$nbmots = str_word_count($chaineDeCaracteres);
echo "La phrase << ".$chaineDeCaracteres." >> contient ".$nbmots." mots. <br>";

// Méthode 2

echo "La phrase << ".$chaineDeCaracteres." >> contient ".str_word_count($chaineDeCaracteres)." mots. <br>";

// Méthode 3

function nbmots($chaineDeCaracteres)
{
    return str_word_count($chaineDeCaracteres);
};

echo "La phrase << ".$chaineDeCaracteres." >> contient ".nbmots($chaineDeCaracteres)." mots.<br>";




?>