<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);

$zanahoria = $_COOKIE["zanahoria"];
$tomate= $_COOKIE["tomate"];
$cebolla=$_COOKIE["cebolla"];
$lechuga=$_COOKIE["lechuga"];




 if(!isset($zanahoria)){
        $zanahoria=0;
        echo "<p>tienes un total de $zanahoria zanahoria</p>";
    }else{
    echo "<p>tienes un total de $zanahoria zanahoria</p>";
    }
if(!isset($tomate)){
        $tomate=0;
        echo "<p>tienes un total de $tomate tomate</p>";
}else{
    echo "<p>tienes un total de $tomate tomate</p>";
                }

if(!isset($cebolla)){
    $cebolla=0;
            echo "<p>tienes un total de $cebolla cebolla</p>";
    }else{
        echo "<p>tienes un total de $cebolla cebolla</p>";
    }




if(!isset($lechuga)){
$lechuga=0;
echo "<p>tienes un total de $lechuga lechugas</p>";
}else{
echo "<p>tienes un total de $lechuga lechugas</p>";
}
  
    ?>

  <p><a href="index.php">Volver a la lista de productos</a></p>
    
</body>
</html>