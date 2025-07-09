<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subida Múltiple de Archivos</title>
</head>
<body>
    <h2>Subir hasta 3 archivos</h2>
    <form action="multi_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivos[]" multiple accept="*/*" max="3"><br><br>
        <input type="submit" value="Subir archivos" name="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['archivos'])) {
            $total = count($_FILES['archivos']['name']);
            if ($total > 3) {
                echo "Solo puedes subir hasta 3 archivos.";
            } else {
                for ($i = 0; $i < $total; $i++) {
                    if ($_FILES['archivos']['error'][$i] == UPLOAD_ERR_OK) {
                        $nombreTmp = $_FILES['archivos']['tmp_name'][$i];
                        $nombreArchivo = basename($_FILES['archivos']['name'][$i]);
                        move_uploaded_file($nombreTmp, "uploads/" . $nombreArchivo);
                        echo "Archivo subido: " . htmlspecialchars($nombreArchivo) . "<br>";
                    } else {
                        echo "Error al subir el archivo " . htmlspecialchars($_FILES['archivos']['name'][$i]) . "<br>";
                    }
                }
            }
        }
    }
    ?>
</body>
</html>