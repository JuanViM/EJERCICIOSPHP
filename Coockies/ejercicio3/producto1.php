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
<input type="text" value="Zanahorias" name="nombreZa" readonly>
<input type="number" name="cantidadZa">
<input type="submit">
</form>   

<?php

if(isset($_POST["cantidadZa"])){

    $_COOKIE["zanahoria"];

$totalZana = $_POST["cantidadZa"];

$zanahorias = $totalZana + $_COOKIE["zanahoria"];

setcookie("zanahoria",$zanahorias);
}

echo "ha añadido al carrito " . isset($zanahorias) ? "ha añadido al carrito ".$zanahorias=0 ." zanahorias": $zanahorias. " zanahorias";


?>
<p><a href="carrito.php"><input type="button" value="ir a carrito"></a></p>

</body>
</html>