<h1>Exercice 9:</h1>

<h2>Résultat</h2>



<?php
// La méthode 2 est la plus optimisée
$age = -5;
$sexe = "m";

// Méthode 1:

if ($sexe=="F" or $sexe=="f")
{
    if(18<$age and $age<35)
    {
        echo "La personne est imposable <br>";
    } elseif(35<$age)
    {
        echo "La personne n'est pas imposable <br>";
    }else
    {
        echo "Donner un age correct<br>";
    }
}elseif ($sexe=="M" or $sexe=="m")
{
    if(20<$age)
    {
        echo "La personne est imposable <br>";
    } elseif (0<$age)
    {
        echo "La personne n'est pas imposable <br>";
    }else
    {
        echo "Donner un age correct<br>";
    }
}else
{
    echo "Donner le bon caractere pour le sexe <br>"; 
}

// Méthode 2: 

if ((($sexe=="F" or $sexe=="f" )and (18<$age and $age<35))or (($sexe=="M" or $sexe=="m") and (20<$age)))
{
    echo "La personne est imposable <br>";
}else if ($age>0 and ($sexe=="F" or $sexe=="f" or $sexe=="M" or $sexe=="m"))
{
    echo "La personne n'est pas imposable <br>";
}else 
{
    echo "Donner un age et/ou une sexe correct<br>";
}

?>