<?php
include 'libreria.php';

$conexion = retornarConexion();
if ($conexion) {
    echo "Conexión exitosa con la base de datos.";
    mysqli_close($conexion);
} else {
    echo "Error de conexión.";
}
?>