<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico</title>
</head>
<body>
    <h2>Bienvenido al Periódico</h2>
    <?php
    $titulares = [
        'politica' => 'Cumbre internacional sobre políticas públicas.',
        'economica' => 'El dólar alcanza su máximo histórico.',
        'deportiva' => 'El equipo local gana el campeonato nacional.'
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titular'])) {
        $tipo = $_POST['titular'];
        setcookie('titular', $tipo, time() + 3600); // 1 hora
        $_COOKIE['titular'] = $tipo; // Para mostrarlo inmediatamente
    }

    if (isset($_COOKIE['titular']) && isset($titulares[$_COOKIE['titular']])) {
        echo "<h3>Titular seleccionado:</h3>";
        echo "<p>" . htmlspecialchars($titulares[$_COOKIE['titular']]) . "</p>";
    } else {
        echo "<h3>Titulares:</h3>";
        echo "<ul>";
        foreach ($titulares as $t) {
            echo "<li>" . htmlspecialchars($t) . "</li>";
        }
        echo "</ul>";
    }
    ?>

    <form method="post" action="periodico.php">
        <p>Seleccione el tipo de titular que desea ver:</p>
        <input type="radio" name="titular" value="politica" id="politica" <?php if(isset($_COOKIE['titular']) && $_COOKIE['titular']=='politica') echo 'checked'; ?>>
        <label for="politica">Noticia política</label><br>
        <input type="radio" name="titular" value="economica" id="economica" <?php if(isset($_COOKIE['titular']) && $_COOKIE['titular']=='economica') echo 'checked'; ?>>
        <label for="economica">Noticia económica</label><br>
        <input type="radio" name="titular" value="deportiva" id="deportiva" <?php if(isset($_COOKIE['titular']) && $_COOKIE['titular']=='deportiva') echo 'checked'; ?>>
        <label for="deportiva">Noticia deportiva</label><br>
        <button type="submit">Guardar preferencia</button>
    </form>

    <br>
    <a href="borrar_cookie_periodico.php">Borrar preferencia de titular</a>
</body>
</html>