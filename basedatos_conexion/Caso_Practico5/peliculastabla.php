<?php


$mysqli = new mysqli("localhost","root","root","sakila",3306);


$resultado=$mysqli->query("select * from film");
$num_filas = $resultado->num_rows;

echo "<p>Aqui puede ver toda la lista de peliculas, pero si lo que desea hacer es cambiar el idioma <a href='cambiarIdioma.php'>aquí</a></p>";
echo "<p>si  desea borrar los actores de la pelicula pulse <a href='borrarActoresPelis.php'>aquí</a></p>";
echo "<p>si desea insertar actores pulse <a href='insertarActor.php'> Aquí</a></p>";
echo "<p>si desea modificar actores pulse <a href='modificarActoresPelis.php'> Aquí</a></p>";

echo "<table border=1>";
echo "<th>ID</th><th>Titulo</th><th>Descripcion</th><th>Año de salida</th><th>Lenguaje</th><th>Características especiales</th>";
for($i=0;$i<$num_filas;$i++){
    $filas = $resultado->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $filas["film_id"] . "</td>";
    echo "<td>" . $filas["title"] . "</td>";
    echo "<td>" . $filas["description"] . "</td>";
    echo "<td>" . $filas["release_year"] . "</td>";
    if($filas["language_id"]==1){
    echo "<td>English</td>";
    }elseif ($filas["language_id"]==2) {
        echo "<td>Italian</td>";
    }elseif ($filas["language_id"]==3) {
        echo "<td>Japanese</td>";
    }elseif ($filas["language_id"]==4) {
        echo "<td>Mandarin</td>";
    }elseif ($filas["language_id"]==5) {
        echo "<td>French</td>";
    }elseif ($filas["language_id"]==6) {
        echo "<td>German</td>";
    }
    echo "<td>" . $filas["special_features"] . "</td>";
    echo "</tr>";
}
echo "<table>";

echo "</div>";




?>