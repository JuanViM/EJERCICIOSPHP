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

 $nombre = $_POST["nombre"];
 $ciudad = $_POST["ciudad"];
 $conferencia = $_POST["conferencia"];
 $division = $_POST["division"];
 $equipoentrante = $_POST["equipoentrante"];


include "querys.php";
$modificar=new querys();

$comprobante=$modificar->modificarEquipo($nombre,$ciudad,$conferencia,$division,$equipoentrante);

if ($comprobante) {
    echo "El equipo a sido modificado satisfactoriamente";
    echo  "<p>Equipo <input type='text' value='$nombre' readonly></p>";
    echo  "<p>Ciudad <input type='text' value='$ciudad' readonly></p>";
    echo  "<p>Conferencia <input type='text' value='$conferencia' readonly></p>";
    echo  "<p>Division <input type='text' value='$division' readonly></p>";
}else {
    echo "el equipo no ha sido modificado";
}

echo "<form method='get' action='actualizar.php'>";
echo "<button type='submit'>ir a Actualizar</button>";
echo "</form>";
echo "<form method='get' action='listaequipos.php'>";
echo "<button type='submit'>ir a Borrar</button>";
echo "</form>";

?>
</body>
</html>