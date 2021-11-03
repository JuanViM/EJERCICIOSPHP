<?php

$mysqli = new mysqli("localhost","root","","beneficios",3307);
if ($mysqli->connect_errno) {   
    echo "Fallo al conectar la base de datos";
}else{
    echo "La conexion fue un exito <br>";
}

$resultadoVentas = $mysqli->query("select * from ventas where num_semana = 1");
$resultadoCostes = $mysqli->query("select * from gastos where num_semana = 1");

$num_filasVentas= $resultadoVentas->num_rows;
$num_filasGastos= $resultadoCostes->num_rows;

$ganado = 0;
$gastado = 0;

for($i=0;$i<$num_filasVentas;$i++){
    $filaventas = $resultadoVentas->fetch_assoc();
    $ganado += $filaventas["venta"];
}

for($i=0;$i<$num_filasGastos;$i++){
    $filascostes = $resultadoCostes->fetch_assoc();
    $gastado += $filascostes["gasto"];
}

echo "El total de Ventas de la semana 1 ha sido " . $ganado . " y el total de gastos ha sido " . $gastado 
. " asi que hemos obtenido un beneficio de " . $ganado - $gastado;


?>