<?php
if (!isset($_POST['clave']) || $_POST['clave'] !== "z80") {
    header("Location: t3p39.php?error=1");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h2>¡Bienvenido! Clave correcta.</h2>
    <a href="t3p39opciones.php">Volver</a>
</body>
</html>
