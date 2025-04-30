<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Solución Tutorial#1 Punto#9 </h1>

    <?php

    echo "El nombre ingresado es: ";
    echo $_REQUEST['nombre'];
    echo '<br>';
    echo "La Edad ingresada es: ";
    echo $_REQUEST['edad'];

    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];

    echo "<br>";
    
    if ($edad >= 18) {
        echo "$nombre es mayor de edad.";
    } else {
        echo "$nombre es menor de edad.";
    }

    ?>

</body>
</html>