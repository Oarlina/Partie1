<h1>Exercice 13:</h1>

<h2>Résultat</h2>



<?php
// pour l'instant je n'ai pas d'idée d'autre version

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyenne = 0;
echo "Les notes obtenues par l'élève sont : ";
$nbnote = count($notes);
for ($i=0;$i<$nbnote;$i++)
{
    echo $notes[$i]." ";
    $moyenne = $moyenne + $notes[$i];
}
$moyenne = $moyenne /$nbnote;
echo "<br> Sa moyenne générale est donc de : ".number_format($moyenne,2);


?>