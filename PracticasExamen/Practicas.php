<?php

define("edad",33);

echo edad;
echo "<br>";


define('gravedad',0.8);

echo"la gravedad vale ". gravedad;

echo "<br>";

$positivo=5;
$negativo=10;

 echo ($positivo-$negativo)>0?"es positivo":"es negativo";
 echo "<br>";

 $years=33;

 echo isset($years)?$years:"No has puesto tu edad";
 echo "<br>";
 echo "<h1>Ejercicio1</h1>";
 echo "<select>";

 for ($i=1;$i<11;$i++){
     echo "<option>$i</option>";
     
 }
 echo "</select>";

 echo "<h1>Ejercicios arrays</h1>";
 $semana1=array("Lunes","martes","miercoles");
 $semana2=["jueves","viernes","sabado","Domingo"];
 for($i=0;$i<(count($semana1));$i++){
     echo $semana1[$i];
     echo "<br>";
 }
 foreach ($semana2 as $key) {
     echo $key;
     echo "<br>";
 }
 $ultimoDia=count($semana2);
 
 echo $semana2[$ultimoDia-1];
 echo "<br>";
 echo "<h1>Shufflet array</h1>";
 $numeros = array("uno", "dos", "tres", "cuatro", "cinco", "seis");
for ($i=0; $i < count($numeros); $i++) { 
    echo $numeros[$i];
    echo "<br>";
}
echo "aplicamos el shufflet al array anterior";
shuffle($numeros);
foreach ($numeros as $numero) {
    echo $numero;
    echo "<br>";
}
echo "Se puede ver como se desordena el array";
echo "<h1>Juntamos array con array_merge</h1>";

$semanaTotal=array_merge($semana1,$semana2);
foreach ($semanaTotal as $dias) {
    echo $dias;
    echo "<br>";
}
function hablar($nombre){
   echo "hola $nombre";
   echo "<br>";
   echo 2+2;

}
 hablar("juan");
 $vacio=1;
 echo "<br>";
echo isset($vacio)." Este es el isset <br>";
echo is_null($vacio). " Este es el is null<br>";
echo empty($vacio)." Este es el empty<br>";

echo isset($vacio)?"esta rellena": "esta vacia <br>";

?>