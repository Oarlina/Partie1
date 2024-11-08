<h1>Exercice 3:</h1>

<h2>Résultat:</h2>


<?php
// La méthode 2 est la plus optimisée
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

// Méthode 1

echo $chaineDeCaracteres."<br>";
$nouveauMot = str_replace("aujourd'hui", "demain", $chaineDeCaracteres); // Sert à remplacer un mot dans une chaîne de caracère, (mot a changer, nouveau mot, variable qui contiendra le changement)
echo $nouveauMot."<br>";

// Méthode 2

echo str_replace("aujourd'hui", "demain", $chaineDeCaracteres)."<br>";

// Méthode 3

function changerMot($chaineDeCaracteres)
{
    return str_replace("aujourd'hui", "demain", $chaineDeCaracteres);
};
echo changerMot($chaineDeCaracteres)."<br>";


?>