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

include_once "Equipo.php";
$insertar = new querys();

$nombre = $_POST["nombre"];
$ciudad = $_POST["ciudad"];
$conferencia = $_POST["conferencia"];
$division = $_POST["division"];

$comprobante=$insertar->insertarEquipo($nombre,$ciudad,$conferencia,$division);

if($comprobante){
    echo "<p>Equipo insertado</p>";
    echo "<p>El equipo insertado ha sido</p>";
    echo  "<p>Equipo <input type='text' value='$nombre' readonly></p>";
    echo  "<p>Ciudad <input type='text' value='$ciudad' readonly></p>";
    echo  "<p>Conferencia <input type='text' value='$conferencia' readonly></p>";
    echo  "<p>Division <input type='text' value='$division' readonly></p>";
}else{
    echo "error al insertar";
}

echo "<form method='get' action='actualizar.php'>";
echo "<button type='submit'>ir a actualizar</button>";
echo "</form>";
echo "<form method='get' action='listaequipos.php'>";
echo "<button type='submit'>ir a borrar</button>";
echo "</form>";
echo "<form method='get' action='index.php'>";
echo "<button type='submit'>ir al inicio</button>";
echo "</form>";



?>
    
</body>
</html>


