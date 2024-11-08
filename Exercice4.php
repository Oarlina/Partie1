
<h2>Résultat:</h2>


<?php
// La méthode 2 est la plus optimisée
$phrase = "Engage le jeu que je le gagne ";

// Méthode 1:

function palindrome($phrase)
{
    $enleverEspace = str_replace(" ", "", $phrase);
    $mettreMinuscule = mb_strtolower($enleverEspace);
    $reversed = strrev($mettreMinuscule);
    if( $reversed == $mettreMinuscule)
    {
        return true;
    }else 
    {
        return false;
    }
};
// Permet de dire une phrase si c'est un palindrome selon la fonction
if (palindrome($phrase)==true)
{
    echo "La phrase << ".$phrase." >> est un palindrome. <br>";
}else 
{
    echo "La phrase << ".$phrase." >> n'est pas un palindrome. <br>";
};

// Méthode 2:

$enleverEspace = str_replace(" ", "", $phrase);
$mettreMinuscule = mb_strtolower($enleverEspace);
$reversed = strrev($mettreMinuscule);
if( $reversed == $mettreMinuscule)
{
    echo "La phrase << ".$phrase." >> est un palindrome. <br>";
}else 
{
    echo "La phrase << ".$phrase." >> n'est pas un palindrome. <br>";
}

?>