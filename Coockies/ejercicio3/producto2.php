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
<input type="text" value="Tomate" name="nombreTom" readonly>
<input type="number" name="cantidadTom">
<input type="submit" value="Comprar">
</form> 
  
<?php
if(isset($_POST["cantidadTom"])){
    $_COOKIE["tomate"];
    $totaltom= $_POST["cantidadTom"];

    $tomates = $totaltom + $_COOKIE["tomate"];
    
    setcookie("tomate",$tomates);
}

echo "ha añadido al carrito " . isset($_POST["cantidadTom"]) ? "ha añadido al carrito ".$_POST["cantidadTom"]=0 ." tomates": $_POST["cantidadTom"]. " tomates";

?>
<a href="carrito.php"><input type="button" value="ir a carrito"></a>
</body>
</html>