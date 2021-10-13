<?php

require "Vehiculo.php";
require "Cuatro_ruedas.php";
require "Dos_ruedas.php";
require "Coche.php";
require "Camion.php";


$fiat = new Vehiculo("rojo",1500);
echo $fiat->getPeso();

$fiat->añadir_persona(50);
echo "<br>";
echo $fiat->getPeso();
echo "<br>";
echo $fiat->circula();
$toledo = new Cuatro_ruedas("azul",1800);
echo "<br>";
echo $toledo->getColor();
$toledo->repintar("rojo");
echo "<br>";
echo $toledo->getColor();
$moto = new Dos_ruedas("amarillo",500);
$moto->poner_gasolina(50);
echo "<br>";
echo $moto->getPeso();
$volvo = new Coche("amarillo",250);
$volvo->añadir_cadenas_nieve(4);
echo "<br>";
echo $volvo->getNumero_cadenas_nieve();
$volvo->quitar_cadenas_nieve(3);
echo "<br>";
echo $volvo->getNumero_cadenas_nieve();

$trailer= new Camion("gris",1500);
$trailer->añadir_remolque(150);
echo "<br>";
 echo $trailer->getLongitud();

 //crear coche

 $nuevo = new coche("verde",1400);
 $nuevo->añadir_persona(65);
 $nuevo->añadir_persona(65);
 echo "<br>";
 echo $nuevo->getColor(). "<br>";
 echo $nuevo->getPeso();



?>