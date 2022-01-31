<?php
session_start();

header("Location:form.php");

$nombre = $_POST["nombre"];

$_SESSION["nombre"][] = $nombre;

header("form.php");
?>