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
    <th>Personaje</th>
    <th>Actor</th>
    <th>Año comienzo</th>
    <th>Año Fin</th>
    <tr>

    <?php

include_once "querys.php";

$actores = new querys();

$tablaActores=$actores->mostrarActores();

foreach ($tablaActores as $filas) {
    echo " <td>" . $filas["serie_name"] . "</td>";
    echo "<td>" . $filas["name"] . "</td>";
    echo " <td>" . $filas["season_start"] . "</td>";
    echo "<td>" . $filas["season_end"] . "</td>";
    echo "</tr>";
}

?>

</table>
    
</body>
</html>