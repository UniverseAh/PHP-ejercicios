<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Solución Tutorial#1 Punto#8 </h1>

    <?php
        /*
        for($f=1;$f<=100;$f++)
        {
        echo $f;
        echo "<br>";
        }

        $valor=rand(1,100);
        $inicio=1;
        while($inicio<=$valor)
        {
        echo $inicio;
        echo "<br>";
        $inicio++;
        }
        */

        echo "<strong> Bucle For <br> </strong>";
        for($f=1;$f<=10;$f++)
        {
        $resul = 2 * $f;
        echo "2 x $f es: $resul <br>";
        }


        echo "<br>";
        echo "<br>";


        echo "<strong> Bucle While <br> </strong>";
        $i = 1;
        while ($i <= 10) {
            $resultado = 2 * $i;
            echo "2 x $i = $resultado <br>";
            $i++;
        }


        echo "<br>";
        echo "<br>";


        echo "<strong> Bucle Do While <br> </strong>";
        $n = 1;
        do{
            $Res = 2 * $n;
            echo "2 x $n = $Res <br>";
            $n++;
        }
        while ($n <= 10);

            
    ?>


</body>
</html>