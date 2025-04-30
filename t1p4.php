<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Solución Tutorial#1 Punto#4 </h1>
    <?php
        #$dia=date("d/m/Y");
        #echo $dia;
        #if ($dia<=10)
        #{
        #echo "sitio activo";
        #}
        #else
        #{
        #echo "sitio fuera de servicio";
        #}
        
        $num=rand(1,100);
        echo $num;
        if ($num<=50)
        {
        echo " El número es menor a 50";
        }
        else
        {
        echo " El número es Mayor a 50";
        }
    ?>
</body>
</html>