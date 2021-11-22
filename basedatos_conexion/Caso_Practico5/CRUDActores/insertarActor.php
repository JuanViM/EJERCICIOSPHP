<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">

<p>Introduzca el nombre del actor<input type="text" name="first_name" required></p>
<p>Introduzca el apellido del actor<input type="text" name="last_name" required></p>
<input type="submit" value="Enviar">
</form>
    
</body>
</html>

<?php

$mysqli = new mysqli("localhost","root","root","sakila",3306);

if(!$_POST == null){
$nombre=$_POST["first_name"];
$apellido=$_POST["last_name"];
$resultado=$mysqli->query("INSERT INTO actor (first_name,last_name) values ('$nombre', '$apellido')");
echo "Actor Insertado con exito <br>";
echo "<h4> Pulse <a href='actorestabla.php'>aquí</a>para regresar a la tabla de los actores</h4>";
}
?>