
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
        <p>
            <label for="numero">Numero de empleado ha modificar</label>
            <input type="number" name="numero" id="numero">
        </p>
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" id="puesto">
        </p>

        <p>
            <label for="jefe">Jefe:</label>
            <input type="number" name="jefe" id="jefe">
        </p>
        <p>
            <label for="fecha">Fecha de Alta:</label>
            <input type="date" name="fecha" id="fecha">
        </p>
        <p>
            <label for="salario">Salario:</label>
            <input type="number" name="salario" id="salario">
        </p>
        <p>
            <label for="comision">Comision:</label>
            <input type="number" name="comision" id="comision">
        </p>
        <p>
            <label for="depart_num">Numero de departamento:</label>
            <input type="number" name="depart_num" id="depart_num">
        </p>
        <input type="submit" name="Insertar">
    </form>    
</body>
</html>

<?php

$mysqli = new mysqli("localhost","root","root","empresa",3306);

if(!$_POST == null){
$numero=$_POST["numero"];

$resultado=$mysqli->query("UPDATE empleados SET nombre=".$_POST["nombre"].",puesto=".$_POST["puesto"].",jefe=".$_POST["jefe"]." ,fechaalta= ".$_POST["fecha"].",salario=".$_POST["salario"]." ,comision=".$_POST["comision"]." dnumero=".$_POST["depart_num"]." where numero=$numero;");
echo "Empleado modificado con exito <br>";

}
?>