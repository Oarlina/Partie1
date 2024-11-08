<h1>Exercice 12:</h1>

<h2>Résultat</h2>

<?php

$tableaux = ["Mickaël"=> "FRA", "Virgile" => "ESP", "Marie-Claire"=>"ENG"];
ksort($tableaux);

foreach($tableaux as $prenom => $langue) 
{
    switch($langue)
    {
        case "FRA": 
            echo "Salut $prenom <br>";
            break;
        case "ESP": 
            echo "Hola $prenom <br>";
            break;
        case "ENG": 
            echo "Hello $prenom <br>";
            break;
        default:
            echo "Bonjour $prenom <br>";
            break;
    }
}


?>