<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" style="text-align: center;">
   <p><label>Email</label>
    <input type="text" name="email" required></p> 
    
    <p><label>Contraseña</label>
    <input type="password" name="contraseña" required></p>
    <p><label>Repetir Contraseña</label>
    <input type="password" name="contraseña2" required></p>

    <p><label>Nombre</label>
    <input type="text" name="nombre" required></p>

    <p><label>Apellidos</label required>
    <input type="text" name="apellidos"></p>
<p style=>
    <p><input type="submit" value="Registrarse"></p>   
</form>
<p style="text-align: center;"><a href="index.php">Ir al login</a></p>

<?php

require "query.php";

$usuarios=new query();


if(!empty($_POST["contraseña"]) && !empty($_POST["contraseña2"]) && ($_POST["contraseña2"] == $_POST["contraseña"]) ){
    $email=  $_POST["email"];
    $pass=  $_POST["contraseña"];
    $nombre=  $_POST["nombre"];
    $apellidos=  $_POST["apellidos"];
    $contrase=sha1($pass);
    $comprobante=$usuarios->sacarUsuario($email);
    foreach($comprobante as $filas){
        if($filas["email"] != $email){
            $entrada=$usuarios->insertarUsuarios($nombre,$apellidos,$email,$contrase);
        }
        echo ("El email ya esta en uso");
    }
    
echo ("esto es el if");
    
    if(!empty($entrada) && $entrada==true){
        echo "<p style='text-align: center;color:green'>Usuario registrado correctamente</p>";

    }else if(!empty($entrada) && $entrada==false){
        echo "<p style='text-align: center;color:red'>error de registro</p>";
    }
    
}else if(!empty($_POST["contraseña"]) && !empty($_POST["contraseña2"]) && $_POST["contraseña"] != $_POST["contraseña2"]) {
    echo "<p style='text-align: center;color:red'>Alerta las contraseñas no coinciden</p>";
       
    
}


?>

</body>
</html>