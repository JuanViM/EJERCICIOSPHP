<?php

    $mysqli = new mysqli("localhost","root","","nba",3307);

    if($mysqli->connect_errno){
        echo "Fallo al conectarse a la base de datos" . $mysqli->connect_errno;
    }else {
        echo "La conexion ha sido realizada";
    }

    $resultado = $mysqli->query("select * from jugadores where posicion = 'C'");
    
    $num_filas = $resultado->num_rows;
    echo "<table border = 1 align='center'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Procedencia</th>";
    echo "<th>Altura</th>";
    echo "<th>Posicion</th>";
    echo "</tr>";

    for($i=0;$i<$num_filas;$i++){
        $fila=$resultado->fetch_assoc();

        echo "<tr>";
        echo "<td>" . $fila["Nombre"] . "</td>";
        echo "<td>" . $fila["Procedencia"] . "</td>";
        echo "<td>" . $fila["Altura"] . "</td>";
        echo "<td>" . $fila["Posicion"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


?>