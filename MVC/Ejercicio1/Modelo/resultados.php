<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //incluimos librerias
    include "partidos.php";
    $partidos=new partidos();

    //Devolvera todos los partidos

$tabla=$partidos->devolverPartidos();
var_dump($tabla);

    ?>
    
</body>
</html>