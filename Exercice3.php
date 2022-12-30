<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    
<?php
//POUR LA BOUCLE WHILE
//Nombre à trouver
$nb=789;
//compteur
$coup=0;
//boucle de tirage
while($x!=$nb)
{
$x=rand(0,1000);
$coup++;
//echo $x,"";//pour afficher tous les tirages
}
echo "$nb trouvé en $coup coups ";
?>


<?php
/* BOUCLE FOR */
//Nombre à trouver
$nb=789;
//boucle de tirage
for($coup=1;$x!=$nb;$coup++)
{
$x=rand(0,1000);
//echo $x,"";//pour afficher tous les tirages

}
echo "$nb trouvé en $coup coups ";
</body>
</html>