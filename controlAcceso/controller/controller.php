<?php
require '../model/db.php';

class Usuario extends usuarios_db
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertarUsuario( $nombre, $apellido, $email,$pass)
    {
        $sql ="INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellido`, `email`, `rol`, `pass`) VALUES (NULL, '', '$nombre', '$apellido', '$email', '1', '$pass')";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            return true;
        } else {
            return null;
        }
    }

    public function getUser($usuario, $pass)
    {
        $sql = "SELECT * FROM usuarios where email = '$usuario' AND pass = '$pass' ";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {

            $tabla = [];

            while ($fila = $resultado->fetch_assoc()) {
                $tabla[] = $fila;
            }
            return $tabla;
        } else {
            return null;
        }
    }

    public function updateUser( $nombre, $apellido, $email)
    {
        $sql = "UPDATE `usuarios` SET  `nombre` = '$nombre', `apellido` = '$apellido' WHERE `usuarios`.`email` = '$email'";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            return true;
        } else {
            return null;
        }
    }
   
}
