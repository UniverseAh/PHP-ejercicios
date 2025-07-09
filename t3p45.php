<!DOCTYPE html>
<html>
<head>
    <title>Tabla ASCII</title>
</head>
<body>
    <h2>Tabla de caracteres ASCII (32-126)</h2>
    <pre>
<?php
$ascii = "";
for ($i = 32; $i <= 126; $i++) {
    $ascii .= sprintf("Código: %3d  Carácter: %s\n", $i, chr($i));
}
echo htmlspecialchars($ascii);
?>
    </pre>
</body>
</html>