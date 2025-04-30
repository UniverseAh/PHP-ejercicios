<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Solución Tutorial#1 Punto#7 </h1>

    <?php
        /*
        $valor=rand(1,10);
        echo "El valor sorteado es $valor<br>";
        if ($valor < 5)
        {
        echo "Es menor a 5";
        }

        elseif ($valor == 5)
        {
        echo "es igual a 5";
        }

        else
        {
        echo "Es mayor a 5";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";

        $valor=rand(1,200);
        echo "El valor sorteado es $valor<br>";
        if ($valor<=9){
        echo "Tiene 1 dígito";
        }
        else{
            if ($valor<100){
            echo "Tiene 2 dígitos";
            }

            else{
            echo "Tiene 3 dígitos";
            }
        }
        */


        $num = rand(1,3);
        echo"El número que salió es: $num <br>";
        if ($num == 1){
            echo "El número es $num";
        } 
        else if ($num == 2){
            echo "El número es $num";
        }
        else if ($num == 3){
            echo "El número es $num";
        }


    ?>


</body>
</html>