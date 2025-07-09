<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos del Curso</title>
</head>
<body>
    <?php
    if (!isset($_GET['codigo'])) {
        echo "No se especificó un curso.";
        exit;
    }
    $conexion = new mysqli("localhost", "root", "", "base1");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $codigo = $conexion->real_escape_string($_GET['codigo']);
    $sqlCurso = "SELECT nombrecurso FROM cursos WHERE codigo='$codigo'";
    $resCurso = $conexion->query($sqlCurso);
    if ($curso = $resCurso->fetch_assoc()) {
        echo "<h2>Alumnos inscriptos en: " . htmlspecialchars($curso['nombrecurso']) . "</h2>";
    } else {
        echo "Curso no encontrado.";
        exit;
    }
    $sqlAlumnos = "SELECT nombre FROM alumnos WHERE codigocurso='$codigo'";
    $resAlumnos = $conexion->query($sqlAlumnos);
    if ($resAlumnos->num_rows > 0) {
        echo "<ul>";
        while ($alumno = $resAlumnos->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($alumno['nombre']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay alumnos inscriptos en este curso.";
    }
    $conexion->close();
    ?>
</body>
</html>