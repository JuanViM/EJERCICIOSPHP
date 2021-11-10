<?php

 $_POST["actor"];
$id = $_POST["actor"];



$mysqli = new mysqli("localhost","root","root","sakila",3306);

if ($mysqli->connect_errno) {
    echo "Error al conectar con la base de datos";
}else{
    echo "La base de datos se ha conectado satisfactoriamente";
}

echo $mysqli->host_info."<br>";
$resultado_id_pelis = $mysqli->query("SELECT film_id FROM film_actor WHERE actor_id = '$id';");
$num_filas = $resultado_id_pelis->num_rows;

echo "<h1 style='center'>Las peliculas en las que participo este actor han sido : </h1>";
echo "<table border=1 align='center'> <th>Pelicula</th> <th> Descripcion </th> <th> Año </th> <tr>  ";
for($i = 0; $i < $num_filas;$i++){
    $fila_id_pelis=$resultado_id_pelis->fetch_assoc();
   
    $idPelis=$fila_id_pelis["film_id"];
    
    
    $resultadoNombrePelis = $mysqli->query("SELECT * FROM `film` WHERE film_id = '$idPelis'; ");
    $num_filasPelis = $resultadoNombrePelis->num_rows;
    for($x=0;$x<$num_filasPelis;$x++){
        $filaNombrePelis=$resultadoNombrePelis->fetch_assoc();
        
        $filaNombrePelis["title"];
        echo "<td>" . $filaNombrePelis["title"] ."</td>" ."<td>". $filaNombrePelis["description"]."</td>". "<td>".$filaNombrePelis["release_year"]. "</td>";
        echo "</tr>";
    }
    
}
echo "</table>";






?>