<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        /*
        function mostrartitulo($men)
        {
        echo "<h1 style=\"text-align:center\">";
        echo $men;
        echo "</h1>";
        }
        mostrartitulo("Primer titulo");
        echo "<br>";
        mostrartitulo("Segundo segundo");
        

        function retornarpromedio($valor1,$valor2)
        {
        $pro=$valor1/$valor2;
        return $pro;
        }
        $v1=100;
        $v2=50;
        $p=retornarpromedio($v1,$v2);
        echo $p;

        function cuadradocubo($valor,&$cuad,&$cub)
        {
        $cuad=$valor*$valor;
        $cub=$valor*$valor*$valor;
        }
        cuadradocubo(2,$c1,$c2);
        echo "El cuadrado de 2 es:".$c1."<br>";
        echo "El cubo de 2 es:".$c2;
        */

        function compararcontras($nombre,$contra1,$contra2) {
            if ($contra1 == $contra2) {
                echo"Ininio Exitoso, Bienvenido";
            }elseif ($contra1 != $contra2) {
                echo "Las Claves no coinciden, Inténtelo denuevo";
            }else{
                echo "Error";
            }
        }

        if(isset($_REQUEST['nombre']) && isset($_REQUEST['contra1']) && isset($_REQUEST['contra2'])){
            $nombre = $_REQUEST['nombre'];
            $contra1 = $_REQUEST['contra1'];
            $contra2 = $_REQUEST['contra2'];
            compararcontras($nombre,$contra1,$contra2);
        }


    ?>

</body>
</html>