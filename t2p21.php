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
        $registros=mysqli_query($conexion,"select codigo, nombrecurso from cursos") or
        die("Problemas en el select:".mysqli_error($conexion));

        while ($reg=mysqli_fetch_array($registros))
        {
        echo "Codigo: ".$reg['codigo']."<br>";
        echo "Nombre: ".$reg['nombrecurso']."<br>";
        echo "<br>";
        echo "<hr>";
        }
        mysqli_close($conexion);
        
    ?>
</body>
</html>