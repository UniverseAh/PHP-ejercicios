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
        mysqli_query($conexion, "update cursos
        set nombrecurso='$_REQUEST[nombrenuevo]'
        where nombrecurso='$_REQUEST[nombreviejo]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        echo "El nombre fue modificado con exito";
        
    ?>
</body>
</html>