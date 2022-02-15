<?php
require_once "../controller/controller.php";
$email = $_POST['email'];
// $usu = $_POST['usuario'];
$password = md5($_POST['password']) ;
$password2 = md5($_POST['passwordOk']);
$name = $_POST['name'];
$apellido = $_POST['apellido'];
if($password === $password2){
$usuario = new Usuario;
$usuario->insertarUsuario($name, $apellido, $email,$password);
echo "Usuario introducido con exito";
}else{
    echo "La contraseña no coincide";
}
?>
<p><a href="../views/index.php">Volver al inicio</a></p>