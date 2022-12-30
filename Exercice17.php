<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17</title>
</head>
<body>
<?php
//Définition de la fonction
function tabmulti($tab,$bord)
{
echo "<table border=\"$bord\" width=\"90%\"><tbody>";
foreach($tab as $cle=>$tab2)
{
echo "<tr><th>$cle</th> ";
foreach($tab2 as $ind=>$val)
{
echo "<td>$val </td>";
}
echo "</tr>";
}
echo "</tbody> </table>";
}
//Définition des tableaux
$tab1 =
array("France"=>array("Paris","Lyon","Marseille","Nantes","Lille"),
"Allemagne"=>array("Berlin","Hambourg","Hanovre","Munich","Cologne"
),
"Espagne"=>array("Madrid","Bilbao","Grenade","Barcelone","Séville")
);
//Appel de la fonction
tabmulti($tab1,1);
?>
</body>
</html>