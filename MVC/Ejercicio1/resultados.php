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
        div{
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

include_once "querys.php";

$equipos=new querys();

$tablaEquipos=$equipos->devolverEquipos();
$tablaPartidos=$equipos->mostrarPartidos();
$tablaTemporada=$equipos->mostrarTemporada();
echo "<div>";
echo "<form action='resultados.php' method='post'>";
   
    echo "<p>Nombre del equipo <select name='partidos'></p>";

foreach($tablaEquipos as $filaEquipos){
    
    echo "<option value=".$filaEquipos["Nombre"].">".$filaEquipos["Nombre"]."</option>";
  
    
}
echo "</select>";

echo "<p>Temporada <select name='temporada'></p>";

foreach($tablaTemporada as $filaTemporada){
    echo "<option value=".$filaTemporada["temporada"].">".$filaTemporada["temporada"]."</option>";
}
echo "</select>";
echo "<p><input value='Enviar' type='submit'></p>";
echo "</form>";
echo "</div>";

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