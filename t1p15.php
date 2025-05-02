<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $ar=fopen("pedidos.txt","a+") or
            die("Problemas en la creacion");
        fputs($ar,$_REQUEST['nombre']);
        fputs($ar,"\n");
        fputs($ar,$_REQUEST['direccion']);
        fputs($ar,"\n");
        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fputs($ar,$_REQUEST['cantidad1']);
        fputs($ar,"\n");
        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fputs($ar,$_REQUEST['cantidad2']);
        fputs($ar,"\n");
        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fputs($ar,$_REQUEST['cantidad3']);
        fputs($ar,"\n");
        fputs($ar,"--------------------------------------------------------");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";
    ?>


</body>
</html>