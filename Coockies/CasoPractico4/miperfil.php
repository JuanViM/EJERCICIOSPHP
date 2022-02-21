<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?= $_COOKIE["color"] ?>;
        }
    </style>
</head>
<body>
    <?php
    error_reporting(0);
session_start();

    ?>
    
    <form action="" method="POST" style="text-align: center;">
    <p><label>Email</label>
    <input type="text" name="email" value="<?php echo $_SESSION["email"] ?>" readonly></p> 
    
    <p><label>Nombre</label>
    <input type="text" name="nombre" required></p>

    <p><label>Apellidos</label required>
    <input type="text" name="apellidos"></p>
    
   <p> <label for="rol">rol</label>
<select name="rol" id="rol">
<option value="1">USER</option>
<option value="2">ADMIN</option>
<option value="3">SUPER ADMIN</option>
</select>
</p>
<p><label for="color">Color de fondo</label>
<select name="color" id="color">
    
    <option value="red">Rojo</option>
    
    <?php if($_COOKIE["color"]=="green"){
       echo   "<option value='green' selected>Verde</option>";
    }else{
        echo "<option value='green'>Verde</option>";
    } ?>

    <?php if($_COOKIE["color"]=="blue"){
       echo   "<option value='blue' selected>Azul</option>";
    }else{
        echo "<option value='blue'>Azul</option>";
        echo $_COOKIE["color"];
    } ?>
    <?php if($_COOKIE["color"]=="white"){
       echo   "<option value='white' selected>Blanco</option>";
    }else{
        echo "<option value='white'>Blanco</option>";
    } ?>
    
</select>


    <p><input type="submit" value="Actualizar"></p>
    <p><a href="cerrarsesion.php">Volver a login sin actualizar</a></p>
    
    </form> 
    
    <?php

    include "query.php";

    $usuario=new query();

    if (empty($_SESSION["color"])) {
        setcookie("color",$_POST["color"],"/");
    }

    if(empty($_SESSION["email"])){
        header("location:index.php");
        
    }else{

    

    $email=$_SESSION["email"];

    if(!empty($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    if(!empty($_POST["apellidos"])){
        $apellidos=$_POST["apellidos"];
    }
    
    if(!empty($_POST["rol"])){
        $rol=$_POST["rol"];
    }
    
    $actualizado=false;
    
    if(!empty($nombre)){
        $actualizado=$usuario->actualizarUsuario($email,$nombre,$apellidos,$rol);
    }
    


    

    if($actualizado==true){

    

if(!empty($nombre)){
    
    echo "<p style='text-align: center;color:green'>el usuario ha sido actualizado satisfactoriamente</p>";
   header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/casoPractico4/prueba.php");
    
}else {

    echo "<p style='text-align: center;color:red'>el usuario no ha sido actualizado</p>";
    //header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/casoPractico3/miperfil.php");

}
}
}

?>

<!-- <?php foreach ($roles as $rol): ?>
    <option value="<?=$rol['id']?>"><?=$rol['rol']?></option>
    <?php endforeach; ?>
</select>


?> -->


</body>
</html>