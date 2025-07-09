
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos Paginados</title>
</head>
<body>

    <h2>Listado de Cursos (Paginado de a 3)</h2>
    <?php
    $conexion = new mysqli("localhost", "root", "", "base1");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    if ($pagina < 1) $pagina = 1;
    $por_pagina = 3;
    $offset = ($pagina - 1) * $por_pagina;

    $total_sql = "SELECT COUNT(*) as total FROM cursos";
    $total_res = $conexion->query($total_sql);
    $total_row = $total_res->fetch_assoc();
    $total_registros = $total_row['total'];
    $total_paginas = ceil($total_registros / $por_pagina);

    $sql = "SELECT codigo, nombrecurso FROM cursos LIMIT $offset, $por_pagina";
    $resultado = $conexion->query($sql);

    echo "<ul>";
    while ($curso = $resultado->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($curso['codigo']) . " - " . htmlspecialchars($curso['nombrecurso']) . "</li>";
    }
    echo "</ul>";

    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($i == $pagina) {
            echo "<strong>$i</strong> ";
        } else {
            echo "<a href='t2p32.php?pagina=$i'>$i</a> ";
        }
    }

    $conexion->close();
    ?>
</body>
</html>