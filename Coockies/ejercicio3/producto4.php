<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="carrito.php" method="POST">
<input type="text" value="Lechuga" name="nombreLe" readonly>
<input type="number" name="cantidadLe">
<input type="submit">
</form>   
<?php

if(isset($_POST["cantidadLe"])){

$_COOKIE["lechuga"];

$totalle = $_POST["cantidadLe"];

$lechugas = $totalle + $_COOKIE["lechuga"];

setcookie("lechuga",$lechugas);
}

echo "ha añadido al carrito " . isset($lechugas) ? "ha añadido al carrito ".$lechugas=0 ." lechugas": $lechugas. " lechugas";


?>
<p><a href="carrito.php"><input type="button" value="ir a carrito"></a></p>

</body>
</html>