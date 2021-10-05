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

//error_reporting(0); //Lo he probado para quitar los errores del warning d ela variable.
require "Indemnizacion.php";

$uno = new Factura();
$nif45=array("Nombre" => "Juan ","Apellidos"=>"Villegas Muñoz");
echo $uno->datosCliente($nif45);

echo "<br>";
echo $uno->getCantidad();
echo $uno->calculaIVA(1500) . "<br>";

$dos = new Indemnizacion();
$nif5=array("Nombre" => "Cristobal ","Apellidos"=>"Gonzalez Gomez");
echo $dos->imdemnizado($nif5) . "<br>";

 



?>
    
</body>
</html>