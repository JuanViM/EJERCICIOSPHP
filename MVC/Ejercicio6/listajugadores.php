<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method='get' action='actualizar.php'>
<button type='submit'>ir a Actualizar</button>
</form>

<form method='get' action='index.php'>
<button type='submit'>ir al inicio</button>
</form>

<table border="2" align="center">
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Procedencia</th>
    <th>Altura</th>
    <th>Peso</th>
    <th>Posicion</th>
    <th>Nombre_Equipo</th>

    <tr>
    <?php



include_once "Jugador.php";

$jugadores = new querys();

$tablajugadores=$jugadores->mostrarJugadores();

foreach ($tablajugadores as $filas) {
    echo "<form method='post' action='borrarBD.php'>";
    echo " <td>"."<input type='number' name='codigo' value=". $filas["codigo"]." "."readonly>" . "</td>";
    echo " <td>"."<input type='text' name='nombre' value=". $filas["Nombre"]." "."readonly>" . "</td>";
    echo "<td>" . $filas["Procedencia"] . "</td>";
    echo " <td>" . $filas["Altura"] . "</td>";
    echo "<td>" . $filas["Peso"] . "</td>";
    echo "<td>" . $filas["Posicion"] . "</td>"; 
    echo "<td>" . $filas["Nombre_equipo"] . "</td>";   
    echo "<td><button type='submit'>Borrar</button>";  
    echo "</td>";   
    echo "</tr>";
    echo "</form>";
}

?>
</table>

</body>
</html>