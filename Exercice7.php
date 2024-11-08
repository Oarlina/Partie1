<h1>Exercice 7:</h1>

<h2>Résultat</h2>



<?php
// La méthode 1 est la plus optimisée
$age=18;

// Méthode 1:

if ($age<6 or 18<$age)
    {
        echo "La catégorie n'est pas gérée";
    }elseif ($age<=7)
    {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie : Poussin. <br>";
    }elseif ($age<=9)
    {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie : Pupille. <br>";
    }elseif ($age<=11)
    {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie : Minime. <br>";
    }else
    {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie : Cadet. <br>";
    }

// Méthode 2:

function categorieSelonAgeEnfant($age)
{
    if ($age<6 or 18<$age)
    {
        return "Aucune";
    }elseif ($age<=7)
    {
        return "Poussin";
    }elseif ($age<=9)
    {
        return "Pupille";
    }elseif ($age<=11)
    {
        return "Minime";
    }else
    {
        return "Cadet";
    }
};
echo "L'enfant qui a ".$age." ans appartient à la catégorie : ".categorieSelonAgeEnfant($age).". <br>";




?>