<?php
setcookie('titular', '', time() - 3600);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cookie Borrada</title>
</head>
<body>
    <p>La preferencia de titular ha sido borrada.</p>
    <a href="periodico.php">Volver al periódico</a>
</body>
</html>