<html>

<head>
    <title>Problema</title>
</head>

<body>
    <form action="t3p43primero.php" method="post">
        Seleccione una fecha (dd/mm/aaaa):
        <br>
        <select name="anio">
            <?php
            for ($i = date('o'); $i >= 1910; $i--) {
                if ($i == date('o'))
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                    echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <select name="mes">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                if ($i == date('m'))
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                    echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <select name="dia">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                if ($i == date('j'))
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                    echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Validar">
    </form>
</body>

</html>