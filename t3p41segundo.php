<?php
$ancho = 200;
$alto = 100;
$imagen = imagecreate($ancho, $alto);
$amarillo = imagecolorallocate($imagen, 255, 255, 0);
imagefill($imagen, 0, 0, $amarillo);
$rojo = imagecolorallocate($imagen, 255, 0, 0);
$valor = ($_REQUEST['direccion']);
$circulos = $_REQUEST['puntos'];
session_start();
$_SESSION['valor'] = $valor;
imagestring($imagen, 5, 25, 5, $valor, $rojo);
for ($c = 0; $c <= $circulos; $c++) {
    $x1 = rand(20, 20);
    $y1 = rand(20, 20);
    $x2 = rand(20, 20);
    $y2 = rand(20, 20);
    imagefilledellipse($imagen, $x1, $y1, $x2, $y2, $rojo);
}
header("Content-type: image/jpeg");
Imagejpeg($imagen);
imagedestroy($imagen);

?>