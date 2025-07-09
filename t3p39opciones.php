<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Clave</title>
</head>
<body>
    <h2>Ingrese la clave</h2>
    <form method="post" action="t3p39.php">
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_REQUEST['error'])) {
        echo "<p style='color:red;'>Ingreso clave incorrecta</p>";
    }
    ?>
</body>
</html>