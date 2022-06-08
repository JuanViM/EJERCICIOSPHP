<?php

$mysqli = new mysqli("localhost","root","","ClubBasket",3307);
if ($mysqli->connect_errno) {
    echo"Fallo al conectarse a la base de datos" .$mysqli->connect_errno;
}else{
    echo "la conexion ha sido realizada ";
}

$resultado = $mysqli ->query("select * from jugadores");
$num_filas=$resultado->num_rows;
for ($i=0; $i <$num_filas;$i++){
    $fila=$resultado->fetch_assoc();
    echo "<br>";
    echo "jugador id : ". $fila["id"]. "|| Nombre del jugador: ". $fila["nombreJugador"] . "|| posicion del jugador: " . $fila["posicion"] . "|| numero del jugador : " . $fila["numero"]. "|| edad del jugador: " . $fila["edad"];
}

?>