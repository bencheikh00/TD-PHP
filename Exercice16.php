<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16</title>
</head>
<body>
<?php
//Définition de la fonction
function sinus($x,$unit)
{
switch($unit)
{
case "R":
case"r":
return sin($x);
break;
case "D":
case"d":
return sin($x/180*PI());
break;
case "G":
case"g":
return sin($x/200*PI());
break;
}
}
//Utilisation
echo sinus(PI()/6,R),"<br />";
echo sinus(60,d),"<br />";
echo sinus(100,g),"<br />";
?>
</body>
</html>