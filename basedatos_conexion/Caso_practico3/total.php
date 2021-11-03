<?php

    $mysqli = new mysqli("localhost","root","","beneficios",3307);

    if($mysqli->connect_errno){
        echo "Fallo al conectarse a la base de datos";
    }else{
        echo "La conexion se ha establecido satisfactoriamente";

    }

    $resultadoVentas = $mysqli->query("select * from ventas");

    $num_filasVentas = $resultadoVentas->num_rows;

    echo "<h1 style='text-align: center;'> Ventas y costes de las semanas 1 y 2 </h1>";

    echo "<table border=1 align='center'>";
    echo "<tr>";
    echo "<th> ID</th>";
    echo "<th> Venta</th>";
    echo "<th> Numero de la semana </th>";
    echo "</tr>";

    for ($i=0;$i<$num_filasVentas;$i++){
        $filaventas = $resultadoVentas->fetch_assoc();
        echo "<tr>";
        echo "<td>" . $filaventas["Id"] . "</td>";
        echo "<td>" . $filaventas["venta"] . "</td>";
        echo "<td>" . $filaventas["num_semana"] . "</td>";
        echo "</td>";
    }

 


    $resultadoCostes= $mysqli->query("select * from gastos");

    $num_filasCostes = $resultadoCostes->num_rows;

    
    echo "<tr>";
    echo "<th> ID</th>";
    echo "<th> costes</th>";
    echo "<th> Numero de la semana </th>";
    echo "</tr>";

    for ($i=0;$i<$num_filasCostes;$i++){
        $filagastos = $resultadoCostes->fetch_assoc();
        echo "<tr>";
        echo "<td>" . $filagastos["Id"] . "</td>";
        echo "<td>" . $filagastos["gasto"] . "</td>";
        echo "<td>" . $filagastos["num_semana"] . "</td>";
        echo "</td>";
    }

    echo "</table>";


?>