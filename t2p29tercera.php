<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        mysqli_query($conexion, "UPDATE alumnos 
            SET nombre='$_REQUEST[nombre]', 
                mail='$_REQUEST[mail]', 
                codigocurso='$_REQUEST[codigocurso]' 
            WHERE codigo='$_REQUEST[codigo]'") or
            die("Problemas en el update: " . mysqli_error($conexion));

        echo "Los datos del alumno fueron modificados con éxito.";

        mysqli_close($conexion);
    ?>

</body>
</html>