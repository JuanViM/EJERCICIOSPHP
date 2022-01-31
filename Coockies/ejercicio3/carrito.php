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
echo (isset($_COOKIE["cebolla"]));
echo "<p>tienes un total de ". isset($_COOKIE["zanahoria"])==1 ? $_COOKIE["zanahoria"]=0 : $_COOKIE["zanahoria"] . " zanahorias</p>";
echo "<p>tienes un total de ". isset($_COOKIE["tomate"])==1 ? $_COOKIE["tomate"]=0 : $_COOKIE["tomate"] . " tomates</p>";
echo "<p>tienes un total de ". isset($_COOKIE["cebolla"])==1 ? 0 : $_COOKIE["cebolla"] . " cebollas</p>";
echo "<p>tienes un total de ". isset($_COOKIE["lechuga"])==1 ? $_COOKIE["lechuga"]=0 : $_COOKIE["lechuga"] . " lechugas</p>";
  
    ?>

  <p><a href="index.php">Volver a la lista de productos</a></p>
    
</body>
</html>