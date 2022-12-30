<?php
switch($_POST["choix"])
{
case "Vendre":
header("pagevente.html");
break;
case "Acheter":
header("pageachat.html");
break;
case "Louer":
header("pagelocation.html");
break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
<fieldset>
<legend><b>Faites votre choix </b></legend>
<table>
<tr>
<td><input type="submit" name="choix" value="Vendre" /></td>
<td><input type="submit" name="choix" value="Acheter"
/></td>
<td><input type="submit" name="choix" value="Louer" /></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>