<style>

    tr:first-child{
        color: red;
    }
    

    tr:last-child{
        color:green;
    }
    
    </style>

<?php

//establecemos la conexion con la base de datos
$mysqli = new mysqli("localhost","root","","Paises",3307);

if ($mysqli->connect_errno) {
    echo "Fallo al conectarse a la base de datos" . $mysqli->connect_errno;
}else{
echo "La conexion ha sido realizada ";
}
// informa del nombre del host en este caso host local
echo $mysqli->host_info . "<br>"; 
// le pasamos a la base de datos la query/consulta y guardamos lo que devuelve en resultado
$resultado = $mysqli->query("select * from pais"); 
//guardamos en num filas en numero total de filas que devuelve num_rows
$num_filas = $resultado->num_rows;

echo "<table border=1 align='center' style='text-align: center;'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Nombre </th>";
echo "<th> Continente </th>";
echo "</tr>";
//hacemos un for para recorrer el numero de filas que tenemos
for($i=0;$i<$num_filas;$i++){
    //en fila guardamos los valores de cada fila en este caso cada pais mediante fetch_assoc con un array asociativo.
    $fila=$resultado->fetch_assoc();
    echo "<tr>";
    //vamos sacando los datos del array asociativo con $fila["Id"].
    echo "<td>" .$fila["Id"] . "</td>";
    echo "<td>" . $fila["Nombre"]. "</td>";
    echo "<td>" . $fila["Continente"]. "</td>";
    echo "</tr>";
}
echo "</table>";



?>