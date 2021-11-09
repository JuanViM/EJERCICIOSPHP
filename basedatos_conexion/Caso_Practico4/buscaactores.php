<?php


echo $_POST["categoria"];
$numCategoria=$_POST["categoria"];

$mysqli = new mysqli("localhost","root","","sakila",3307);

if($mysqli->connect_errno){
    echo "Error al conectar la base de datos";

}else{

    echo "La base de datos se ha conectado satisfactoriamente";

}

echo $mysqli->host_info."<br>";
$resultadoidpelis = $mysqli->query("SELECT film_id FROM `film_category` where category_id = '$numCategoria';");
$num_filasidpelis = $resultadoidpelis->num_rows;

echo "<h1 align='center'> Seleccione la pelicula para ver sus actores</h1>";
echo "<select align='center' name='peliculas'>";
for($i=0;$i<$num_filasidpelis;$i++){
    $filaidpelis=$resultadoidpelis->fetch_assoc();
    
    $idpelis = $filaidpelis["film_id"];

     $resultadonompelis = $mysqli->query("SELECT * FROM `film` where film_id = '$idpelis';");
     $num_filasnompelis = $resultadonompelis->num_rows;
     
     for($x=0;$x<$num_filasnompelis;$x++){
         $filanombrepelis=$resultadonompelis->fetch_assoc();
         echo "<br>";
         
        echo '<option value="'.$filanombrepelis["film_id"].'">'. $filanombrepelis["title"].'</option>';
         
     }   
        
}
echo "</select>"; 



?>