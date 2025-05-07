<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursos</title>
</head>
<body>
    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "SELECT nombrecurso FROM cursos") or
            die("Problemas en el select: " . mysqli_error($conexion));

        $contador = 0;
        while ($reg = mysqli_fetch_array($registros)) {
            echo "- " . $reg['nombrecurso'] . "<br>";
            $contador++;
        }

        echo "<br><strong>Cantidad total de cursos:</strong> " . $contador;

        mysqli_close($conexion);

    ?>
</body>
</html>