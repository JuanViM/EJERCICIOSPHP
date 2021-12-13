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

    <p>Introduzca el Numero del Empleado que desea borrar<input type="number" name="numero"></p>
    <p><input type="submit" value="Borrar"></p>
    </form>
</body>
</html>

<?php



if(!$_POST==null){
    $num=$_POST["numero"];
    
    $mysqli = new mysqli("localhost","root","root","empresa",3306);
    $RESULTADOborrar=$mysqli->query("DELETE from empleados WHERE numero=$num");
    
    echo "Empleado borrado con exito <br>";
   
}



?>