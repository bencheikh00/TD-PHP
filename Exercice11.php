<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>
<body>
<?php
/* EXERCICE 8 */
$tab=array("Dupont"=>array("caty","dakar",20),"Schmoll"=>array("geni","dakar",20),"Smith"=>array("ben","kedougou",21));
while($element=each($tab))
{
echo "Personne: {$element['key']} <br />";
while($coord=each($element[1]))
{
echo "clé {$coord[0]} valeur {$coord[1]} <br />";
}
echo"<hr />";
}
?>

<?php
/* EXERCICE 9*/
$tab=array("Dupont"=>array("prenom"=>"caty","ville"=>"dakar","age"=>20),
"Schmoll"=>array("prenom"=>"geni","ville"=>"dakar","age"=>20),
"Smith"=>array("prenom"=>"ben","ville"=>"kedougou","age"=>21));
while($element=each($tab))
{
echo "Personne: {$element['key']} <br />";
while($coord=each($element[1]))
{
echo "{$coord[0]}:{$coord[1]} <br />";
}
echo"<hr />";
}
?>
</body>
</html>