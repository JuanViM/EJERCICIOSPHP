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

  
    $equipo=$_POST["equipo"];
    
    include "querys.php";
     $borrar= new querys();
     $comprobante=$borrar->borrarEquipo($equipo);
     if($comprobante){
        echo "Ha sido eliminada";
     }else {
        echo "Error";
     }

     echo "<form method='get' action='listaequipos.php'>";
     echo "<button type='submit'>ir a ver los equipos</button>";
     echo "</form>";
?>
</body>
</html>