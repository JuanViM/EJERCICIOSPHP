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

var_dump($_POST);
 
    $nombre=$_POST["nombre"];
    $codigo=(int)$_POST["codigo"];
    
    include "Jugador.php";
     $borrar= new querys();
     $comprobante=$borrar->borrarJugador($codigo,$nombre);
     
     if($comprobante){
        echo "Ha sido eliminada";
     }else {
        echo "Error";
     }

     echo "<form method='get' action='listajugadores.php'>";
     echo "<button type='submit'>ir a ver los Jugadores</button>";
     echo "</form>";
?>
</body>
</html>