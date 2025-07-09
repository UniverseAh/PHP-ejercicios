<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
</head>
<body>
    <h2>Listado de Cursos</h2>
    <?php
    $conexion = new mysqli("localhost", "root", "", "base1");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $sql = "SELECT codigo, nombrecurso FROM cursos";
    $resultado = $conexion->query($sql);
    while ($curso = $resultado->fetch_assoc()) {
        echo "<a href='t2p31.php?codigo={$curso['codigo']}'>" . htmlspecialchars($curso['nombrecurso']) . "</a><br>";
    }
    $conexion->close();
    ?>
</body>
</html>