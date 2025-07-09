<html>

<head>
    <tittle>Problema</tittle>
</head>

<body>
    <?php
    $conexion = mysqli_connect("Localhost", "root", "", "base1") or die("Problemas de conexion");
    $registros = mysqli_query($conexion, "select aul.codigo, alu.nombre, alu.mail, alu.fechanac, cur.nombre_curso from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso") or die("¨Problemas de conexion:" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Fecha de Nacimiento:" . $reg['fechanac'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>