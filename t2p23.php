<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion=mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexión");

        $registros=mysqli_query($conexion, "select nombrecurso from cursos
        where nombrecurso='$_REQUEST[nombrecurso]'") or
        die("Problemas en el select:".mysqli_error($conexion));

        if ($reg=mysqli_fetch_array($registros))
        {
        mysqli_query($conexion,"delete from cursos where
        nombrecurso='$_REQUEST[nombrecurso]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        echo "Se efectuó el borrado del curso.";
        }
        else
        {
        echo "El curso escrito no existe.";
        }
        mysqli_close($conexion);

    ?>
</body>
</html>