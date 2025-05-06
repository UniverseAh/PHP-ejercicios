<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta de Alumnos</h1>
    <form action="t2p20.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre"><br>
        <br>
        <br>

        Ingrese su Gmail:
        <input type="text" name="mail"><br>

        <br>
        <br>

        Seleccione el curso:
        <select name="codigocurso">
        <option value="1">PHP</option>
        <option value="2">ASP</option>
        <option value="3">JSP</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>