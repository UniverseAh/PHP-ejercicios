<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario con Cookie</title>
</head>
<body>
    <h2>Formulario de Usuario</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['usuario'])) {
        $usuario = trim($_POST['usuario']);
        setcookie('usuario', $usuario, time() + 3600); // 1 hora
        $_COOKIE['usuario'] = $usuario;
    }

    if (isset($_COOKIE['usuario'])) {
        echo "<p>Último usuario ingresado: <strong>" . htmlspecialchars($_COOKIE['usuario']) . "</strong></p>";
    }
    ?>
    <form method="post" action="usuario_cookie.php">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <button type="submit">Guardar usuario</button>
    </form>
</body>
</html>