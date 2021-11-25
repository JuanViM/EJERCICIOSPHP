
<?php

$mysqli = new mysqli("localhost","root","root","sakila",3306);


$resultado=$mysqli->query("SELECT * FROM actor");
$num_filas = $resultado->num_rows;

echo " <p>Aqui puede ver toda la lista de actores, pero si lo que desea hacer es insertar uno nuevo pinche <a href='insertarActor.php'>aqui</a></p> ";
echo " si quiere borrar un actor pulse <a href='borrarActor.php'>aquí</a></p> ";
echo " O si lo que desea es modificar un actor pulse <a href='modificarActor.php'>aquí</a></p>";
echo "<table border=1>";
echo "<th>ID</th><th>Primer Nombre</th><th>Apellido</th>";
for($i=0;$i<$num_filas;$i++){
    $filas = $resultado->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $filas["actor_id"] . "</td>";
    echo "<td>" . $filas["first_name"] . "</td>";
    echo "<td>" . $filas["last_name"] . "</td>";
    echo "</tr>";
}
echo "<table>";

echo "</div>";



?>


