<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    if (
        is_numeric($_REQUEST['dia']) &&
        is_numeric($_REQUEST['mes']) &&
        is_numeric($_REQUEST['anio'])
    ) {
        if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio'])) {
            echo "La fecha ingresada es correcta";
        } else {
            echo "La fecha ingresada no es correcta";
        }
    } else {
        echo "La fecha ingresada no es valida";
    }
    ?>
</body>

</html>