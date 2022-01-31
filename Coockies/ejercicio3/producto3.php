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
<input type="text" value="Cebolla" name="nombreCe" readonly>
<input type="number" name="cantidadCe">
<input type="submit">
</form>   
<?php

if(isset($_POST["cantidadCe"])){

    $_COOKIE["cebolla"];

$totalcebo = $_POST["cantidadCe"];

$cebollas = $totalcebo + $_COOKIE["cebolla"];

setcookie("cebolla",$cebollas);
}

echo "ha añadido al carrito " . isset($cebollas) ? "ha añadido al carrito ".$cebollas=0 ." cebollas": $cebollas. " cebollas";

?>
<a href="carrito.php"><input type="button" value="ir a carrito"></a>
</body>
</html>