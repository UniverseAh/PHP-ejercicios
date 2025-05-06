<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select * from cursos
        where nombrecurso='$_REQUEST[nombrecurso]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
    ?>
        <form action="t2p25parte3.php" method="post">
        Ingrese el nuevo nombre: 
        <input type="text" name="nombrenuevo" value="<?php echo $reg['nombrecurso'] ?>">
        <br>
        <br>
        <input type="hidden" name="nombreviejo" value="<?php echo $reg['nombrecurso'] ?>">
        <input type="submit" value="Modificar">
        </form>
        <?php
        }
        else
        echo "No existe un curso con ese nombre";
    ?>

</body>
</html>