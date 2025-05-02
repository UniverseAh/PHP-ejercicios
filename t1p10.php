<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo"El nombre ingresado es: ";
    echo $_REQUEST['nombre'];

    if ($_REQUEST['boton']=="NoEst"){
        echo " y no tiene Estudios";

    }else if ($_REQUEST['boton']== "EstPri"){
        echo " y tiene Estudios Primarios";

    }else if ($_REQUEST["boton"] == "EstSec"){
        echo " y tiene Estudios Secudarios";
    }

    ?>
</body>
</html>