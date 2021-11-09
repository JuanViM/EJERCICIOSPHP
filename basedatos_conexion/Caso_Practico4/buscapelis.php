<?php

 $_POST["actor"];
$id = $_POST["actor"];



$mysqli = new mysqli("localhost","root","","sakila",3307);

if ($mysqli->connect_errno) {
    echo "Error al conectar con la base de datos";
}else{
    echo "La base de datos se ha conectado satisfactoriamente";
}

echo $mysqli->host_info."<br>";
$resultadoidpelis = $mysqli->query("SELECT film_id FROM film_actor WHERE actor_id = '$id';");
$num_filas = $resultadoidpelis->num_rows;

echo "<h1 style='center'>Las peliculas en las que participo este actor han sido : </h1>";
echo "<table border=1 align='center'> <tr>";
for($i = 0; $i < $num_filas;$i++){
    $filaIdpelis=$resultadoidpelis->fetch_assoc();
   
    $idpelis=$filaIdpelis["film_id"];
    echo "<br>";

    echo $filaIdpelis["film_id"];
    
    $resultadoNombrePelis = $mysqli->query("SELECT title FROM `film` WHERE film_id = '$idpelis'; ");
    $num_filaspelis = $resultadoNombrePelis->num_rows;
    for($x=0;$x<$num_filaspelis;$x++){
        $filanombrepelis=$resultadoNombrePelis->fetch_assoc();
        
        $nombrepelis=$filanombrepelis["title"];
        echo "<td>" . $nombrepelis. "</td>";
        echo "</tr>";
    }
    
}
echo "</table>";






?>