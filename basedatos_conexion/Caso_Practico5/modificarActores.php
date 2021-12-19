<?php
 




$idpelis=$_POST["peli"];
$mysqli = new mysqli("localhost","root","root","sakila",3306);

$resultadoIDActores=$mysqli->query("SELECT * FROM FILM_ACTOR WHERE FILM_ID = $idpelis");
$num_filas = $resultadoIDActores->num_rows;
echo "<form method='post'>";
echo "<select name='actor'>";
for($i=0;$i<$num_filas;$i++){
    $filas = $resultadoIDActores->fetch_assoc();
    

    $resultado=$mysqli->query("SELECT * FROM ACTOR");
    $num_filas2 = $resultado->num_rows;
   
    for ($i=0; $i < $num_filas2 ; $i++) { 
        $filas2 = $resultado->fetch_assoc();
   
   
    echo "<option value='".$filas2["actor_id"]."'>".$filas2["first_name"]." ".$filas2["last_name"]."</option>";
}
}
echo "</select>";
echo "<p>si desea modificar un actor pulse en modificar</p>";


if(isset($_POST["actor"])){
     
    $actor= $_POST["actor"];
    
    $resultadoInsertar=$mysqli->query("UPDATE actor set first_name='".$_POST["nombre"]."',last_name='".$_POST["apellidos"]."' where actor_id= $actor");
    
}
echo "<table border=1 align='center'> <th>Nombre Actor</th> <th>Apellidos </th> ";

 $query = $mysqli -> query ("SELECT * FROM actor,film_actor where actor.actor_id=film_actor.actor_id and film_actor.film_id=".$_POST["peli"]);
 $num_filasPelis = $query->num_rows;
    
 for($x=0;$x<$num_filasPelis;$x++){
        $valores=$query->fetch_assoc();
        echo '<tr><td>'.$valores['first_name'].'</td><td>'.$valores['last_name'].'</td>';
    }


?>

<div>nombre actor</div>
<input type="text" name="nombre" required>
<div>apellidos actor</div>
<input type="text" name="apellidos" required><br>
<input type="hidden" name="peli" value="

<?php

echo $idpelis;

?>
">
<p><input type='submit' value='Modificar'></p>
</form>

