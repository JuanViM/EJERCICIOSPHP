<?php
require_once "../controller/controller.php";
session_start();
$mail = $_SESSION['mail'];
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$usuario = new Usuario;

$comprobar = $usuario -> updateUser($name , $apellido, $mail);
if($comprobar == null){
    echo "Error al actualizar tu perfil";
    echo "<p><a href='../views/index.php'>Volver al inicio inicio</a></p>";
}else{
    echo "Perfil actualizado con exito  " ;
   echo "<p><a href='../views/index.php'>Volver al inicio</a></p>";
   
   
}

?>