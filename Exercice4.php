<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
        function ppcm($a,$b){

            $res = $a * $b;
            while($a > 1){
                $r = $a % $b;
            if($r == 0 ){
              $result = $res / $b;
                break;  // sorti quand résultat trouvé
                     }
                $a = $b;
                $b = $r;
            }
             return $result; // retourne le résultat
        }
    ?>

</body>
</html>