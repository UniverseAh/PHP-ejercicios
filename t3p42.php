<html>

<head>
    <title>Problema</title>
</head>

<body>
    <h1>Registrar Queja</h1>
    <form action="t3p42primero.php" method="post">
        <label for="nombre">Nombre del visitante:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="queja">Descripción de la queja:</label><br>
        <textarea id="queja" name="queja" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar Queja">
    </form>
    <br>
    <a href="t3p42segundo.php">Ver todas las quejas registradas</a>
</body>

</html>