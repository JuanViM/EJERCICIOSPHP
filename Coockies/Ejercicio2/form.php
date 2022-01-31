<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="sesion.php" method="post">
        <legend>Introduzca su nombre</legend>
    <input type="text" name="nombre" placeholder="Introduzca su nombre">
    <input type="submit">
   <p> <a href="sesionoff.php"><input type="button" value="borrar sesion"></a></p>
    </form>

    <?php
session_start();
echo "<p>Usuario anterior:</p>";

    foreach ($_SESSION["nombre"] as $tabla) {
        echo "   <p> $tabla</p>";
    }
 

?>
    
</body>
</html>