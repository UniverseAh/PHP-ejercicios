<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


        $contador= 0;
        echo"El nombre ingresado es: ";
        echo $_REQUEST['nombre'];

        if (isset($_REQUEST['check1']))
        {
        $contador++;
        }
        if (isset($_REQUEST['check2']))
        {
        $contador++;
        }
        if (isset($_REQUEST['check3']))
        {
        $contador++;
        }
        if (isset($_REQUEST['check4']))
        {
        $contador++;
        }

        echo " y Practica $contador Deportes"
    ?>

</body>
</html>