<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $ar = fopen("quejas.txt", "a") or
        die("Problemas en la creacion");
    fputs($ar, "Fecha:");
    fputs($ar, date("d/m/Y \n"));
    fputs($ar, "Hora:");
    fputs($ar, date("H/i/s \n"));
    fputs($ar, "Nombre:");
    fputs($ar, $_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs($ar, "Queja: \n");
    fputs($ar, $_REQUEST['queja']);
    fputs($ar, "\n");
    fputs($ar, "-------------------------------------------------------- \n",);
    fputs($ar, "\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    echo "<br>";
    ?>
    <a href="t3p42segundo.php">Ver todas las quejas registradas</a><br>
    <a href="t3p42.php">Regresar</a>
</body>

</html>