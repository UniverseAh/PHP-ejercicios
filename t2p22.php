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
        $registros=mysqli_query($conexion,"select nombre, codigo, codigocurso
        from alumnos where nombre='$_REQUEST[nombre]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
        echo "Nombre: ".$reg['nombre']."<br>";
        echo "Curso: ".$reg['codigo']."<br>";
        echo "Código de Curso: ".$reg['codigocurso']."<br>";
        }
        else
        {
        echo "No existe un alumno con ese mail.";
        }
        mysqli_close($conexion);
    ?>

</body>
</html>