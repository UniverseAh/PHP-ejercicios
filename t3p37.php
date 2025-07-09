<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida Alumno</title>
</head>
<body>
    <?php
    if (isset($_SESSION['nombre_alumno'])) {
        echo "<h2>Bienvenido, " . htmlspecialchars($_SESSION['nombre_alumno']) . "!</h2>";
    } else {
        echo "<p style='color:red;'>No puede visitar esta página.</p>";
    }
    ?>
    <br>
    <a href="t3p37opciones.php">Volver al login</a>
</body>
</html>