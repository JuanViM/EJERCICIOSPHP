<?php

echo $_POST["actor"];

/*
$mysqli = new mysqli("localhost","root","","sakila",3307);

if ($mysqli->connect_errno) {
    echo "Error al conectar con la base de datos";
}else{
    echo "La base de datos se ha conectado satisfactoriamente";
}

echo $mysqli->host_info."<br>";
$resultado = $mysqli->query("SELECT actor_id FROM actor WHERE first_name='$nombre';");
$num_filas = $resultado->num_rows;

for($i = 0; $i < $num_filas;$i++){
    $fila=$resultado->fetch_assoc();
    echo "<br>";
    echo $fila["actor_id"];
}
*/



?>