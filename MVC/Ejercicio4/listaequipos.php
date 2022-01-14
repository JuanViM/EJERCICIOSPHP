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
    <th>Nombre</th>
    <th>Ciudad</th>
    <th>Conferencia</th>
    <th>Division</th>
    
    <tr>
    <?php



include_once "querys.php";

$equipos = new querys();

$tablaEquipos=$equipos->mostrarEquipos();

foreach ($tablaEquipos as $filas) {
    echo "<form method='post' action='borrarBD.php'>";
    echo " <td>"."<input type='text' name='equipo' value=". $filas["Nombre"]." "."readonly>" . "</td>";
    echo "<td>" . $filas["Ciudad"] . "</td>";
    echo " <td>" . $filas["Conferencia"] . "</td>";
    echo "<td>" . $filas["Division"] . "</td>";  
    echo "<td><button type='submit'>Borrar</button>";  
    echo "</td>";   
    echo "</tr>";
    echo "</form>";
}

?>
</table>

</body>
</html>