<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>

<?php


$idpelis=$_POST["peli"];


$mysqli = new mysqli("localhost","root","root","sakila",3306);

$resultadoIDActores=$mysqli->query("SELECT * FROM FILM_ACTOR WHERE FILM_ID = $idpelis");
$num_filas = $resultadoIDActores->num_rows;
echo "<form method='post'>";
echo "<select>";
for($i=0;$i<$num_filas;$i++){
    $filas = $resultadoIDActores->fetch_assoc();
    

    $resultado=$mysqli->query("SELECT * FROM ACTOR WHERE ACTOR_ID =".$filas['actor_id']);
    $num_filas2 = $resultado->num_rows;
    $filas2 = $resultado->fetch_assoc();
   
    echo "<option value='".$filas2["actor_id"]."'>".$filas2["first_name"]." ".$filas2["last_name"]."</option>";
    
}
echo "</select>";
echo "</form>";
echo "<p>si desea borrar a un actor pulse en borrar</p>";
echo  "<p><input type='hidden' value='$idpeli'></p>";

?>

