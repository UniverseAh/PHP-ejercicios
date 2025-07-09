<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ap PHP</title>
</head>

<body>
    <?php
    $ar = fopen("quejas.txt", "r") or
        die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);
    ?>
    <a href="t3p42.php">Regresar a la pagina principal</a>
</body>

</html>