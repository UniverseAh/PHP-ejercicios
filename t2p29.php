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

        $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE codigo='$_REQUEST[codigo]'") or
            die("Problemas en el select: " . mysqli_error($conexion));

        if ($espacio = mysqli_fetch_array($registros)) {
    ?>

        <form action="t2p29tercera.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $espacio['codigo']; ?>">

            Nombre: <input type="text" name="nombre" value="<?php echo $espacio['nombre']; ?>" required>
            <br><br>

            Mail: <input type="email" name="mail" value="<?php echo $espacio['mail']; ?>" required>
            <br><br>

            Curso:
            <select name="codigocurso">

                <?php
                    $cursos = mysqli_query($conexion, "SELECT * FROM cursos") or
                        die("Problemas en el select: " . mysqli_error($conexion));

                    while ($curso = mysqli_fetch_array($cursos)) {
                        if ($espacio['codigocurso'] == $curso['codigo']) {
                            echo "<option value=\"$curso[codigo]\" selected>$curso[nombrecurso]</option>";
                        } else {
                            echo "<option value=\"$curso[codigo]\">$curso[nombrecurso]</option>";
                        }
                    }
                ?>
                
            </select>
            <br>
            <br>

            <input type="submit" value="Modificar">
        </form>

        
    <?php

        } else {
            echo "No existe un alumno con el código ingresado.";
        }

        mysqli_close($conexion);

    ?>

</body>
</html>