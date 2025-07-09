<?php
function retornarConexion() {
    $conexion = mysqli_connect("localhost", "root", "", "base1");
    return $conexion;
}
?>