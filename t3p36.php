<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <head>
        <title>Problema</title>
    </head>

    <body>
        <?php
        if (isset($_COOKIE['usu']))
            echo "Cookie de sesión creada. Su valor es $_COOKIE[usu]";
        else
            echo "No existe cookie de sesión";
        ?>
        <br>
        <a href="t3p36opciones.php">Crear cookie de sesión</a>
    </body>


</body>

</html>