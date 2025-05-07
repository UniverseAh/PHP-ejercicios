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
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $codigocurso = $_POST['codigocurso'];
        mysqli_query($conexion, "INSERT INTO alumnos(nombre, mail, codigocurso) VALUES ('$nombre', '$mail', '$codigocurso')") or
            die("Problemas en el insert: " . mysqli_error($conexion));
        echo "El alumno fue registrado correctamente.";
        mysqli_close($conexion);
    ?>

</body>
</html>