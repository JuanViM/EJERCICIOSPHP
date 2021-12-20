<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <style>
        h1{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <?php
    
    echo "<h1>Partidos del equipo ".$_POST["partidos"]."</h1>";
    ?>
    <table border="2" align="center">
    <th>Equipo local</th>
    <th>Puntos local</th>
    <th>Equipo visitante</th>
    <th>Puntos visitante</th>
    <tr>
       
   

<?php

include "index.php";

isset($_POST["partidos"]);

foreach($tablaPartidos as $filaPartidos){
    if(isset($_POST["partidos"]) && $_POST["partidos"]==$filaPartidos["equipo_local"] && $_POST["temporada"]==$filaPartidos["temporada"]){
       echo " <td>".$filaPartidos["equipo_local"]."</td>";
       echo "<td>".$filaPartidos["puntos_local"]."</td>";
       echo " <td>".$filaPartidos["equipo_visitante"]."</td>";
       echo "<td>".$filaPartidos["puntos_visitante"]."</td>";
    }
    echo "</tr>";

}

?>
</table>

</body>
</html>