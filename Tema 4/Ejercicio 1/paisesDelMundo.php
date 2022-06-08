<?php

$mysqli = new mysqli("localhost","root","","Paises",3307);

if ($mysqli->connect_errno) {
    echo "Fallo al conectarse a la base de datos" . $mysqli->connect_errno;
}else{
echo "La conexion ha sido realizada ";
}

echo $mysqli->host_info . "<br>";

$resultado = $mysqli->query("select * from pais");
$num_filas = $resultado->num_rows;

echo "<table border=1 align='center' style='text-align: center;'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Nombre </th>";
echo "<th> Continente </th>";
echo "</tr>";
for($i=0;$i<$num_filas;$i++){
    $fila=$resultado->fetch_assoc();
    echo "<tr>";
    echo "<td>" .$fila["Id"] . "</td>";
    echo "<td>" . $fila["Nombre"]. "</td>";
    echo "<td>" . $fila["Continente"]. "</td>";
    echo "</tr>";
}
echo "</table>";



?>