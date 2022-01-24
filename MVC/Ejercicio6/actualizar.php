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
include "Jugador.php";
$modificar = new querys();
$jugadores=$modificar->mostrarJugadores();
$equipos=$modificar->mostrarEquipos();


echo "<form action='actualizarDB.php' method='post'>";
echo "<p>Seleccione el jugador a actualizar <select name='jugadorentrante'></p>";

foreach ($jugadores as $filajugadores) {
    echo "<option value=" . $filajugadores["Nombre"].">".$filajugadores["Nombre"] . "</option>";
   
}
    echo  "<p></select>";
    echo  "<p>Nombre <input type='text' name='nombre' placeholder='Ejem: corey'></p>";
    echo  "<p>Procedencia <input type='text' name='procedencia' placeholder='Ejem: Málaga'></p>";
    echo  "<p>Altura <input type='text' name='altura' placeholder='Ejem: 6-9'></p>";
    echo  "<p>Peso <input type='text' name='peso' placeholder='Ejem: 210'></p>";
    echo  "<p>Posicion <input type='text' name='posicion' placeholder='Ejem: F-G'></p>";
    
    echo "<p>Seleccione el Equipo a actualizar <select name='nombrequi'></p>";

    foreach ($equipos as $filaequipos) {
        echo "<option value=" . $filaequipos["Nombre"].">".$filaequipos["Nombre"] . "</option>";
       
    }
        echo  "<p></select>";

  
    echo "<p><input type='submit' value='Actualizar'></p>";
    echo "</form>";

?>
    
</body>
</html>