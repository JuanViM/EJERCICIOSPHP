


<?php

error_reporting(0);
$idpelis=$_POST["peli"];
$mysqli = new mysqli("localhost","root","root","sakila",3306);

$resultadoIDActores=$mysqli->query("SELECT * FROM FILM_ACTOR WHERE FILM_ID = $idpelis");
$num_filas = $resultadoIDActores->num_rows;
echo "<form method='post'>";
echo "<select name='actor'>";
for($i=0;$i<$num_filas;$i++){
    $filas = $resultadoIDActores->fetch_assoc();
    

    $resultado=$mysqli->query("SELECT * FROM ACTOR WHERE ACTOR_ID =".$filas['actor_id']);
    $num_filas2 = $resultado->num_rows;
    $filas2 = $resultado->fetch_assoc();
   
    echo "<option value='".$filas2["actor_id"]."'>".$filas2["first_name"]." ".$filas2["last_name"]."</option>";
    
}
echo "</select>";
echo "<p>si desea borrar a un actor de la pelicula pulse en borrar</p>";
echo  "<p><input type='submit' value='Borrar'></p>";
$idpelis;
if(!$_POST["actor"]==null){
    
    $resultado=$mysqli->query("DELETE from FILM_ACTOR WHERE actor_id=".$_POST["actor"]." AND film_id=".$_POST["peli"]);
    echo "Actor borrado con exito de la pelicula <br>";
    
}


?>

<input type="hidden" name="peli" value="

<?php

echo $idpelis;

?>
">
</form>


