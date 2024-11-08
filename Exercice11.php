<h1>Exercice 11:</h1>

<h2>Résultat</h2>



<?php
// Je ne vois pas d'autre méthode pour l'instant

$marqueDeVoiture = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbmarque = count($marqueDeVoiture);
echo "Il y a ".$nbmarque." marques de voitures dans le tableau :<br>";
for ($i=0;$i<$nbmarque;$i++)
{
    echo $marqueDeVoiture[$i]."<br>";
}



?>