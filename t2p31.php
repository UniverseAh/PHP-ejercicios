<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "Listado de la tabla del $_REQUEST[tabla] <br>";
        for($f=1;$f<=10;$f++)
        {
        $valor=$f*$_REQUEST['tabla'];
        echo $valor."-";
        }
    ?>

</body>
</html>