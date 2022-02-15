<?php

require "query.php";

$usuarios=new query();

if($_POST["contraseña2"] == $_POST["contraseña"]){
    $email=  $_POST["email"];
    $pass=  $_POST["contraseña"];
    $nombre=  $_POST["nombre"];
    $apellidos=  $_POST["apellidos"];
    $contrase=sha1($pass);
    $entrada=$usuarios->insertarUsuarios($nombre,$apellidos,$email,$contrase);
    if(!empty($entrada) && $entrada==true){
        echo "<p style='text-align: center;color:green'>Usuario registrado correctamente</p>";
        header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/index.php");

    }else if(!empty($entrada) && $entrada==false){
        echo "<p style='text-align: center;color:red'>error de registro</p>";
        header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/registro.php");
    }
    
}else if($_POST["contraseña"] != $_POST["contraseña2"]) {
    echo "<p style='text-align: center;color:red'>Alerta las contraseñas no coinciden</p>";
    header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/registro.php");
    
}


?>