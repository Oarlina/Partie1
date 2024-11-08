<h1>Exercice 8:</h1>

<h2>Résultat</h2>



<?php
// La méthode 1 est la plus optimisée
$nombre = 8;
// Méthode 1:

 for ($i=1;$i<=10;$i++)
 {
    echo $i." * ".$nombre." = ".$i*$nombre."<br>";
 }


// Méthode 2:
 $it = 1;
while ($it<=10)
{
    echo $it." * ".$nombre." = ".$it*$nombre."<br>";
    $it++;
}

?>