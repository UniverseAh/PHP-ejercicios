<html>

<head>
    <title>Problema</title>
</head>

<body>
    <form action="t3p44primero.php" method="post">
        Ingrese su nombre:<br>
        <input type="text" name="nombre"><br>
        Ingrese su email:<br>
        <input type="text" name="email"><br>
        ingrese su fecha de nacimiento:<br>
        <input type="text" name="dia" size="2"><br>
        <input type="text" name="mes" size="2"><br>
        <input type="text" name="anio" size="4"><br>
        <br>
        Seleccione el curso:
        <select name="codigocurso">
            <?php
            $conexion = mysqli_connect("Localhost", "root", "", "base1") or die("Problemas de conexion");
            $registros = mysqli_query($conexion, "select codigo,nombre_curso from cursos") or die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<option value=\"$reg[nombrecurso]</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>