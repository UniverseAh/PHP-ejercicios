<html>

<head>
    <tittle>Problema</tittle>
</head>

<body>
    <?php
    $conexion = mysqli_connect("Localhost", "root", "", "base1") or die("Prolemas de conexion");
    $fechanaciemiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
    mysqli_close($conexion);
    echo "El alumno fue dado de alta.";
    ?>
    <a href="t3p44segundo.php">Ver listado de alumnos</a>
</body>

</html>