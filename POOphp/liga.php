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

require "equipo.php";

$equipo1 = new Equipo();
$equipo2 = new Equipo();
$equipo1->mostrarEquipo();


//$equipo1->nombre="UNCBasket";
//$equipo2->nombre="RMDBasket";
$equipo1->ponerEquipo("UNCBasket");
$equipo2->ponerEquipo("RMDBasket");
$equipo1->mostrarEquipo();
$equipo2->mostrarEquipo();
$equipo1->setPosicion(1);
$equipo2->setPosicion(5);
echo " Posicion  " .$equipo1->getPosicion() . "<br>";
echo " Posicion " .$equipo2->getPosicion() . "<br>";



?>
    
</body>
</html>