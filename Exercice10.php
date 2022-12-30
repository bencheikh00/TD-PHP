
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
<?php
/* EXERCICE 8*/
$tab=array("Dupont"=>array("Caty","Dakar",20),"Schmoll"=>array("geni","Dakar",20),"Smith"=>array("Ben","Kedougou",21));
foreach($tab as $cle=>$valeur)
{
echo "Elément $cle :
";
foreach($valeur as $ind=>$val)
{
echo "elément $ind :", $val, "
";
}
}
?>


<?php
/* EXERCICE 9*/
$tab=array("Dupont"=>array("prenom"=>"caty","ville"=>"Dakar","age"=>20),
"Schmoll"=>array("prenom"=>"geni","ville"=>"dakar","age"=>20),
"Smith"=>array("prenom"=>"ben","ville"=>"kedougou","age"=>21));
foreach($tab as $cle=>$valeur)
{
echo "Element $cle :
";
foreach($valeur as $cle2=>$val)
{
echo " $cle2 :", $val, "
";
}
}
?>
</body>
</html>