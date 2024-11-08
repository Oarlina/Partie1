<h1>Exercice 10:</h1>

<h2>Résultat</h2>



<?php
// La méthode 2 est la plus optimisée
$aPayer = 152;
$verser = 200;
$billetDeDix = 0;
$billetDeCinq = 0;
$pieceDeDeux = 0;
$pieceDeUn = 0;

// Méthode 1:

echo "Montant à payer : ". $aPayer." € <br> Montant versé : ". $verser." € <br>";
$reste = $verser - $aPayer;
echo "Reste à payer : ". $reste." € <br> *************************************************** <br> Rendre monnaie : <br>";
while ($reste>=10)
{
    $billetDeDix++;
    $reste -= 10;
}
if ($reste>=5)
{
    $billetDeCinq++;
    $reste -= 5;
}
while ($reste>=2)
{
    $pieceDeDeux++;
    $reste -= 2;
}
echo $billetDeDix." billet(s) de 10€ - ".$billetDeCinq." billet(s) de 5€ - ".$pieceDeDeux." pièce(s) de 2€ - ".$reste." pièce(s) de 1€. <br>";

// Méthode 2:

echo "Montant à payer : ". $aPayer." € <br> Montant versé : ". $verser." € <br>";
$reste = $verser - $aPayer;
echo "Reste à payer : ". $reste." € <br> *************************************************** <br> Rendre monnaie : <br>";
$billetDeDix = intval($reste/10);
$reste %= 10;
$billetDeCinq = intval($reste/5);
$reste %= 5;
$pieceDeDeux = intval($reste/2);
$reste %= 2;
echo $billetDeDix." billet(s) de 10€ - ".$billetDeCinq." billet(s) de 5€ - ".$pieceDeDeux." pièce(s) de 2€ - ".$reste." pièce(s) de 1€. <br>";

?>