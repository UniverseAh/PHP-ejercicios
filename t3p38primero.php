<?php
include 'libreria.php';

$conexion = retornarConexion();
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $sql);

echo "<h2>Listado de Alumnos</h2>";
echo "<ul>";
while ($alumno = mysqli_fetch_assoc($resultado)) {
    echo "<li>" . htmlspecialchars($alumno['nombre']) . " - " . htmlspecialchars($alumno['mail']) . "</li>";
}
echo "</ul>";

mysqli_close($conexion);
?>