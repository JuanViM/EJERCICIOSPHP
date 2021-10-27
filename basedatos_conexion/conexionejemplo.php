<?php

$mysqli = new mysqli("localhost","root","","alumnos",3307);
if($mysqli->connect_errno){
    echo"Fallo al conectarse a la base de datos" .$mysqli->connect_errno;
}else{
    echo "la conexion ha sido realizada ";
}
echo $mysqli->host_info."<br>";

$resultado = $mysqli ->query("select * from alumnos");
$num_filas=$resultado->num_rows;
for ($i=0; $i <$num_filas;$i++){
    $fila=$resultado->fetch_assoc();
    echo "<br>";
    echo "Alumno id = ". $fila["Id"]. " Nombre: ". $fila["Nombre"] . " Apellidos: " . $fila["Apellidos"] . " Edad : " . $fila["Edad"]; 
}
?>

