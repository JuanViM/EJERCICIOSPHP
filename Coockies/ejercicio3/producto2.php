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
error_reporting(0);
if(isset($_POST["cantidadTom"])){
    $_COOKIE["tomate"];
    $totaltom= $_POST["cantidadTom"];

    $tomates = $totaltom + $_COOKIE["tomate"];
    
    setcookie("tomate",$tomates,time()+86.400);
}

echo "<p>Ha añadido al carrito " . $_POST["cantidadTom"]. " tomates</p>";

?>
<a href="carrito.php"><input type="button" value="ir a carrito"></a>
</body>
</html>