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

        $registros = mysqli_query($conexion, "
            SELECT cur.nombrecurso, COUNT(alu.codigo) AS cantidad
            FROM cursos AS cur
            LEFT JOIN alumnos AS alu ON cur.codigo = alu.codigocurso
            GROUP BY cur.codigo
        ") or die("Problemas en el select: " . mysqli_error($conexion));

        while ($curso = mysqli_fetch_array($registros)) {
            echo " <strong> Nombre del curso: </strong>" . $curso['nombrecurso'] . "<br>";
            echo " <strong> Cantidad de inscriptos: </strong>" . $curso['cantidad'] . "<br>";

            $alumnos = mysqli_query($conexion, "
                SELECT nombre 
                FROM alumnos 
                WHERE codigocurso = (
                    SELECT codigo 
                    FROM cursos 
                    WHERE nombrecurso = '" . $curso['nombrecurso'] . "')") 
            or die("Problemas en el select de alumnos: " . mysqli_error($conexion));

            echo "<strong> Inscritos: </strong>";
            if (mysqli_num_rows($alumnos) > 0) {
                while ($alumno = mysqli_fetch_array($alumnos)) {
                    echo "-" . $alumno['nombre'];
                }
            } else {
                echo "No hay inscriptos en este curso.<br>";
            }

            echo "<hr>";
        }

        mysqli_close($conexion);
    ?>

</body>
</html>