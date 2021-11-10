<?php


$idPelis=$_POST["peliculas"];
$idPelis;

$mysqli = new mysqli("localhost","root","","sakila",3307);

if($mysqli->connect_errno){
    echo "Error al conectar la base de datos ";
}else{
    echo "La base de datos se conecto satisfactoriamente ";
}

echo $mysqli->host_info."<br>";

$resultado_id_actor = $mysqli->query("SELECT * FROM `film_actor` where film_id = '$idPelis';");
$num_filas_id_actor = $resultado_id_actor->num_rows;

echo "<h1> Los actores que participaron en esta pelicula fueron :  </h1>";

for($i=0;$i<$num_filas_id_actor;$i++){
    $fila_id_actor = $resultado_id_actor->fetch_assoc();
    
    
     $idactor=$fila_id_actor["actor_id"];
    $resultadoNombrePelis = $mysqli->query("SELECT * FROM `actor` where actor_id = '$idactor'");
    $num_filasNombreActor = $resultadoNombrePelis->num_rows;
    for($x=0;$x<$num_filasNombreActor;$x++){
        $filaNombreActor = $resultadoNombrePelis->fetch_assoc();
        echo "<br>";
        echo $filaNombreActor["first_name"] . " " . $filaNombreActor["last_name"];

    }
}


?>