<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <p>Introduzca el ID de la pelicula que desea borrar<input type="number" name="id"></p>
    <p><input type="submit" value="Borrar"></p>
    </form>
</body>
</html>

<?php



if(!$_POST==null){
    $id=$_POST["id"];
    $mysqli = new mysqli("localhost","root","root","sakila",3306);

    $resultadoActores=$mysqli->query("DELETE from film_actor where film_id='$id'");
    $resultadoCategorias=$mysqli->query("DELETE from film_category where film_id='$id'");
    $resultadoInventario=$mysqli->query("DELETE from inventory where film_id='$id'");
    

    $resultado=$mysqli->query("DELETE from film WHERE film_id=$id");
    echo "Actor borrado con exito <br>";
    echo "<h4>Pulse<a href='actorestabla.php'> aquí </a> para regresar a la tabla de los actores</h4>";
}



?>