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
include "Equipo.php";
$modificar = new querys();
$equipos=$modificar->mostrarEquipos();


echo "<form action='actualizarDB.php' method='post'>";
echo "<p>Seleccione el equipo a actualizar <select name='equipoentrante'></p>";

foreach ($equipos as $filaequipos) {
    echo "<option value=" . $filaequipos["Nombre"].">".$filaequipos["Nombre"] . "</option>";
   
}
    echo  "<p></select>";
    echo  "<p>Nombre <input type='text' name='nombre' placeholder='Ejem: Celta'></p>";
    echo  "<p>Ciudad <input type='text' name='ciudad' placeholder='Ejem: Málaga'></p>";
    echo  "<p>Conferencia <input type='text' name='conferencia' placeholder='Ejem: Este'></p>";
    echo  "<p>Division <input type='text' name='division' placeholder='Ejem: Primera'></p>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";

?>
    
</body>
</html>