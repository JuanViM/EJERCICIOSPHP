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
        header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/index.php");
        
        exit;
    }

    exit;
    ?>