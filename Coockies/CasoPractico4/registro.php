<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_COOKIE["color"] ?>;
        }
    </style>
</head>
<body>
    <?php

    session_start();

    if (empty($_POST["email"])){
        $_SESSION["email"]="";
    }else{
        $_SESSION["email"]= $_POST["email"];
    }
    if (empty($_POST["contraseña"])) {
        $_SESSION["contraseña"]="";
    }else{
        $_SESSION["contraseña"]= $_POST["contraseña"];
    }
    if (empty($_POST["contraseña2"])) {
        $_SESSION["contraseña2"]="";
    }else{
        $_SESSION["contraseña2"]= $_POST["contraseña2"];
    }
    if (empty($_POST["nombre"])) {
        $_SESSION["nombre"]="";
    }else{
        $_SESSION["nombre"]= $_POST["nombre"];
    }
    if (empty($_POST["apellidos"])) {
        $_SESSION["apellidos"]="";
    }else{
        $_SESSION["apellidos"]= $_POST["apellidos"];
    }
   

    ?>
    
<form action="" method="post" style="text-align: center;">
   <p><label>Email</label>
    <input type="text" name="email" value="<?php echo $_SESSION["email"] ?>" required></p> 
    
    <p><label>Contraseña</label>
    <input type="password" name="contraseña" value="<?php echo $_SESSION["contraseña"] ?>" required></p>
    <p><label>Repetir Contraseña</label>
    <input type="password" name="contraseña2" value="<?php echo $_SESSION["contraseña2"] ?>" required></p>

    <p><label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $_SESSION["nombre"] ?>" required></p>

    <p><label>Apellidos</label required>
    <input type="text" name="apellidos" value="<?php echo $_SESSION["apellidos"] ?>"></p>
<p style=>
    <p><input type="submit" value="Registrarse"></p>   
</form>
<p style="text-align: center;"><a href="index.php">Ir al login</a></p>

<?php

require "query.php";

$usuarios=new query();

if(!empty($_POST["contraseña"]) && $_POST["contraseña2"] == $_POST["contraseña"]){
    $email=  $_POST["email"];
    $pass=  $_POST["contraseña"];
    $nombre=  $_POST["nombre"];
    $apellidos=  $_POST["apellidos"];
    $contrase=sha1($pass);
    $tieneMail=$usuarios->comprobarMail($email);
    if(count($tieneMail)>0){
        echo "<p style='text-align: center;color:red'>El mail ya existe</p>";
        

        }else{
            $entrada=$usuarios->insertarUsuarios($nombre,$apellidos,$email,$contrase);
            ?>
            <?php

            

            session_unset();

            session_destroy();

        

        }
    
                
   
    if(!empty($entrada) && $entrada==true){
        echo "<p style='text-align: center;color:green'>Usuario registrado correctamente</p>";
        

    }else if(!empty($entrada) && $entrada==false){
        echo "<p style='text-align: center;color:red'>error de registro</p>";
       
    }
    
}else if(!empty($_POST["contraseña"]) && $_POST["contraseña"] != $_POST["contraseña2"]) {
    echo "<p style='text-align: center;color:red'>Alerta las contraseñas no coinciden</p>";

    
}


?>


</body>
</html>