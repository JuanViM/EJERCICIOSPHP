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


    include "query.php";

    $usuario=new query();

    
    ?>
    <form action="" method="POST" style="text-align: center;">
    <p><label>Email</label>
    <input type="text" name="email" value="<?php echo $_SESSION["email"] ?>" readonly></p> 
    
    <p><label>Nombre</label>
    <input type="text" name="nombre" required></p>

    <p><label>Apellidos</label required>
    <input type="text" name="apellidos"></p>
    <p style=>
    <p><input type="submit" value="Actualizar"></p>
    <p><a href="index.php">Volver a login</a></p>
    </form> 
    <?php

    if (!empty($_POST["email"])) {
        $email=$_SESSION["email"];
    }

    if (!empty($_POST["nombre"])) {
        $nombre=$_POST["nombre"];
    }

    if (!empty($_POST["apellidos"])) {
        $apellidos=$_POST["apellidos"];
    }
    
    if (!empty($_POST["apellidos"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"])) {
        $actualizado=$usuario->actualizarUsuario($email,$nombre,$apellidos);
    }
    
    

    if(!empty($actualizado) && $actualizado == true){
        
        echo "<p style='text-align: center;color:green'>el usuario ha sido actualizado satisfactoriamente</p>";
        
    }else {

        echo "<p style='text-align: center;color:red'>el usuario no ha sido actualizado</p>";

    }



    ?>
    
</body>
</html>