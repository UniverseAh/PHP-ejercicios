<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Alumno</title>
</head>
<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "SELECT alu.codigo AS codigo, nombre, mail, nombrecurso
            FROM alumnos AS alu
            INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso
            WHERE alu.codigo = '$_REQUEST[codigo]'") or
            die("Problemas en el select: " . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
            echo "Código: " . $reg['codigo'] . "<br>";
            echo "Nombre: " . $reg['nombre'] . "<br>";
            echo "Mail: " . $reg['mail'] . "<br>";
            echo "Curso: " . $reg['nombrecurso'] . "<br>";
        } else {
            echo "No existe un alumno con el código ingresado.";
        }

        mysqli_close($conexion);
    ?>

</body>
</html>