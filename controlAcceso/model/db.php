<?php
class usuarios_db
{

    //Atributos para la conexion
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "usuarios";
    private $port = "3310";

    //conector
    private $conexion;

    //Controladores de Errores
    private $error = false;
    private $error_msj = "";

    function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
        if ($this->conexion->connect_errno) {
            $this->error = true;
            $this->error_msj = "No se pudo realizar la conexion";
        }
    }

    function hayError()
    {
        return $this->error;
    }
    function msjError()
    {
        return $this->error_msj;
    }

    //REALIZAMOS CUALQUIER CONSULTA BBDD
    function realizarConsulta($consulta)
    {
        if (!$this->hayError()) {
            $resultado = $this->conexion->query($consulta);
          
            return $resultado;
        } else {
            $this->error_msj = "Imposible realizar la consulta: " . $consulta;
            return null;
        }
    }
}
