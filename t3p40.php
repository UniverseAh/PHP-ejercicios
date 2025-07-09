<?php
$ancho = 200;
$alto = 60;
$imagen = imagecreate($ancho, $alto);

$color_fondo = imagecolorallocate($imagen, 220, 220, 220); // gris claro
$color_boton = imagecolorallocate($imagen, 70, 130, 180);  // azul acero
$color_texto = imagecolorallocate($imagen, 255, 255, 255); // blanco

imagefilledrectangle($imagen, 10, 10, $ancho-10, $alto-10, $color_boton);

$texto = "Botón Dinámico";
$fuente = 5;
$ancho_texto = imagefontwidth($fuente) * strlen($texto);
$alto_texto = imagefontheight($fuente);
$x = ($ancho - $ancho_texto) / 2;
$y = ($alto - $alto_texto) / 2;
imagestring($imagen, $fuente, $x, $y, $texto, $color_texto);

header("Content-type: image/png");
imagepng($imagen);
imagedestroy($imagen);

?>
