<?php
session_start();

$_SESSION=$_POST['nombre'];

echo "<p> hola $_SESSION </p>";


echo "<p><a href=form.php><input type=button value=volver></a></p>";

?>

