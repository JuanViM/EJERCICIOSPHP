<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" style="text-align: center;">
   <p><label>Usuario</label>
    <input type="text" name="email"></p> 
    
    <p><label>Password</label>
    <input type="password" name="contraseña"></p>
    <p><input type="submit" value="ENTRAR"></p>
    <a href="registro.php">Registrate</a>    
</form>
    <?php

include "query.php";
session_start();


    $usuario=new query();

    if(!empty($_POST["email"])){
        $mail=$_POST["email"];
        $_SESSION["email"]=$_POST['email'];
    }
    
    if (!empty($_POST["contraseña"])) {
        $pass=$_POST["contraseña"];
        $codi=sha1($pass);
    }
    
    
    if(!empty($_POST["email"]) && !empty($_POST["contraseña"])){
        $comprobante=$usuario->comprobarUsuario($mail,$codi);
    }
    
    
   
    
    if(!empty($comprobante)){
        header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/miperfil.php");
        echo "<p style='text-align: center;color:green'>Usuario registrado correctamente</p>";
        exit;
    }else if(empty($comprobante)){
        echo "<p style='text-align: center;color:red'>error de registro</p>";
        // header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/index.php");
        exit;
    }

    exit;
    ?>
    
</body>
</html>