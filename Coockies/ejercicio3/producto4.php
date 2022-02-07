<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<input type="text" value="Lechuga" name="nombreLe" readonly>
<input type="number" name="cantidadLe">
<input type="submit">

<?php
error_reporting(0);
if(isset($_POST["cantidadLe"])){

$_COOKIE["lechuga"];

$totalle = $_POST["cantidadLe"];

$lechugas = $totalle + $_COOKIE["lechuga"];

setcookie("lechuga",$lechugas,time()+86.400);
}

echo "<p>Ha añadido al carrito " . $_POST["cantidadLe"] . " lechugas</p>";


?>
<p><a href="carrito.php"><input type="button" value="ir a carrito"></a></p>

</body>
</html>