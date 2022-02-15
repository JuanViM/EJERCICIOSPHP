<?php
require_once "../controller/controller.php";
session_start();
$pass = md5($_POST['pass']);
$_SESSION['mail'] = $_POST['mail'];
$usuario = new Usuario;
$comprobar = $usuario -> getUser($_SESSION['mail'], $pass);
  
if($comprobar == null){
    echo "introduce una cuenta valida";
    echo "<p><a href='../views/index.php'>Volver al inicio inicio</a></p>";
}else{
    echo "Bienvenido ";
   echo " Que quieres hacer <p><a href='../views/Miperfil.php'>Acceder</a></p>";
   echo "<p><a href='../views/index.php'>Volver al inicio</a></p>";
}

?>