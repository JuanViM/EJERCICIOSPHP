<?php

class db {
    //atributos para la conexion
    private $host="localhost";
    private $user ="root";
    private $pass = "";
    private $db_name = "nba";
// conector
    private $conexion;

// Control de errores
private $error = false;
private $error_msj="";

function __construct(){
    $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
    if($this->conexion->connect_errno){
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion con la BBDD, revisar parametros";
    }
    
}

//funcion para saber si hay error en la conexion
function Error(){
    return $this->error;
}

}


?>
