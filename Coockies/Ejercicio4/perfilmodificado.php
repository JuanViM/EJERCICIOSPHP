<?php
  session_start();
    include "query.php";

$usuario=new query();

    $email=$_SESSION["email"];

    $nombre=$_POST["nombre"];

    $apellidos=$_POST["apellidos"];

    $actualizado=$usuario->actualizarUsuario($email,$nombre,$apellidos);




if($actualizado==true){
    
    echo "<p style='text-align: center;color:green'>el usuario ha sido actualizado satisfactoriamente</p>";
    header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/index.php");
    
}else {

    echo "<p style='text-align: center;color:red'>el usuario no ha sido actualizado</p>";
    header("refresh:2;url=http://localhost/EJERCICIOSPHP/Coockies/Ejercicio4/miperfil.php");

}

?>