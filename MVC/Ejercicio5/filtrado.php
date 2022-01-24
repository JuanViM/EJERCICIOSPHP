<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="2" align="center">
    <th>Equipo local</th>
    <th>Puntos local</th>
    <th>Equipo Visitante</th>   
    <th>Puntos visitante</th>
    <th>Temporada</th>
    <tr>

    <?php

include_once "Equipo.php";

$partidos = new querys();

$equipoLocal = $_POST["equipoLocal"];
$equipovis = $_POST["equipovisitante"];
$temporada= $_POST["temporada"];

$tablaPartidos=$partidos->mostrarPartidos($equipoLocal,$equipovis,$temporada);

foreach ($tablaPartidos as $filas) {
    echo " <td>" . $filas["equipo_local"] . "</td>";
    echo "<td>" . $filas["puntos_local"] . "</td>";
    echo " <td>" . $filas["equipo_visitante"] . "</td>";
    echo "<td>" . $filas["puntos_visitante"] . "</td>";
    echo "<td>" . $filas["temporada"] . "</td>";
    echo "</tr>";
}

?>

</table>
    
</body>
</html>