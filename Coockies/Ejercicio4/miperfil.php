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
session_start();


    ?>
    <form action="perfilmodificado.php" method="POST" style="text-align: center;">
    <p><label>Email</label>
    <input type="text" name="email" value="<?php echo $_SESSION["email"] ?>" readonly></p> 
    
    <p><label>Nombre</label>
    <input type="text" name="nombre" required></p>

    <p><label>Apellidos</label required>
    <input type="text" name="apellidos"></p>
   
    <p><input type="submit" value="Actualizar"></p>
    <p><a href="index.php">Volver a login</a></p>
    </form> 
    
    
</body>
</html>