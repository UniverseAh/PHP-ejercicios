<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Alumno</title>
</head>
<body>
    <h2>Ingresar mail de alumno</h2>
    <form method="post" action="t3p37opciones.php">
        <label for="mail">Mail:</label>
        <input type="email" name="mail" id="mail" required>
        <button type="submit">Ingresar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mail'])) {
        $conexion = new mysqli("localhost", "root", "", "base1");
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        $mail = $conexion->real_escape_string($_POST['mail']);
        $sql = "SELECT nombre FROM alumnos WHERE mail='$mail'";
        $res = $conexion->query($sql);
        if ($alumno = $res->fetch_assoc()) {
            $_SESSION['nombre_alumno'] = $alumno['nombre'];
            echo "<p>Bienvenido, " . htmlspecialchars($alumno['nombre']) . ".</p>";
        } else {
            echo "<p style='color:red;'>Mail no encontrado.</p>";
        }
        $conexion->close();
    }
    ?>
    <br>
    <a href="t3p37.php">Ir a la página de bienvenida</a>
</body>
</html>