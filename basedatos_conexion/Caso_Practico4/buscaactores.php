<?php


$_POST["categoria"];
$numCategoria=$_POST["categoria"];

$mysqli = new mysqli("localhost","root","root","sakila",3306);

if($mysqli->connect_errno){
    echo "Error al conectar la base de datos";

}else{

    echo "La base de datos se ha conectado satisfactoriamente";

}

echo $mysqli->host_info."<br>";
$resultado_id_pelis = $mysqli->query("SELECT film_id FROM `film_category` where category_id = '$numCategoria';");
$num_filas_id_pelis = $resultado_id_pelis->num_rows;

echo "<h1 align='center'> Seleccione la pelicula para ver sus actores</h1>";
echo "<form action='actores.php' method='post'>";
echo "<select align='center' name='peliculas'>";
for($i=0;$i<$num_filas_id_pelis;$i++){
    $fila_id_pelis=$resultado_id_pelis->fetch_assoc();
    
    $idPelis = $fila_id_pelis["film_id"];

     $resultadoNombrePelis = $mysqli->query("SELECT * FROM `film` where film_id = '$idPelis';");
     $num_filasNombrePelis = $resultadoNombrePelis->num_rows;
     
     for($x=0;$x<$num_filasNombrePelis;$x++){
         $filaNombrePelis=$resultadoNombrePelis->fetch_assoc();
         echo "<br>";
         
        echo '<option value="'.$filaNombrePelis["film_id"].'">'. $filaNombrePelis["title"].'</option>';
         
     }   
        
}
echo "</select>"; 
echo "<p><input type='submit' value='ver actores'></p>";
echo "</form>";




?>