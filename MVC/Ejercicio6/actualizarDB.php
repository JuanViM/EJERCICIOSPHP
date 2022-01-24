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
 $procedencia = $_POST["procedencia"];
 $altura = $_POST["altura"];
 $peso = $_POST["peso"];
 $posicion = $_POST["posicion"];
 $nombrequipo = $_POST["nombrequi"];
 $jugador= $_POST["jugadorentrante"];


include "Jugador.php";
$modificar=new querys();

$comprobante=$modificar->modificarJugador($nombre,$procedencia,$altura,$peso,$posicion,$nombrequipo,$jugador);

if ($comprobante) {
    echo "El Jugador a sido modificado satisfactoriamente";
    echo  "<p>Nombre <input type='text' value='$nombre' readonly></p>";
    echo  "<p>Procedencia <input type='text' value='$procedencia' readonly></p>";
    echo  "<p>Altura <input type='text' value='$altura' readonly></p>";
    echo  "<p>Peso <input type='text' value='$peso' readonly></p>";
    echo  "<p>Posicion <input type='text' value='$posicion' readonly></p>";
    echo  "<p>Nombre del Equipo <input type='text' value='$nombrequipo' readonly></p>";
}else {
    echo "el equipo no ha sido modificado";
}

echo "<form method='get' action='actualizar.php'>";
echo "<button type='submit'>ir a Actualizar</button>";
echo "</form>";
echo "<form method='get' action='listajugadores.php'>";
echo "<button type='submit'>ir a Borrar</button>";
echo "</form>";

?>
</body>
</html>