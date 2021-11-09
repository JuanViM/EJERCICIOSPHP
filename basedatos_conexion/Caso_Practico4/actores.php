<?php


$idpelis=$_POST["peliculas"];
$idpelis;

$mysqli = new mysqli("localhost","root","root","sakila",3306);

if($mysqli->connect_errno){
    echo "Error al conectar la base de datos";
}else{
    echo "La base de datos se conecto satisfactoriamente";
}

echo $mysqli->host_info."<br>";

$resultadoidactor = $mysqli->query("SELECT * FROM `film_actor` where film_id = '$idpelis';");
$num_filasidactor = $resultadoidactor->num_rows;

for($i=0;$i<$num_filasidactor;$i++){
    $filaidactor = $resultadoidactor->fetch_assoc();
    
    
     $idactor=$filaidactor["actor_id"];
    $resultadonombrepelis = $mysqli->query("SELECT * FROM `actor` where actor_id = '$idactor'");
    $numfilasnomactor = $resultadonombrepelis->num_rows;
    for($x=0;$x<$numfilasnomactor;$x++){
        $filanombreactor = $resultadonombrepelis->fetch_assoc();
        echo "<br>";
        echo $filanombreactor["first_name"] . " " . $filanombreactor["last_name"];

    }
}


?>