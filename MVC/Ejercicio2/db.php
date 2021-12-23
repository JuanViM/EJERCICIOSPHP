<?php

class db {
    //atributos para la conexion
    private $host="localhost";
    private $user ="root";
    private $pass = "root";
    private $db_name = "gameofthrones";
    private $port = 3306;
    
// conector
    private $conexion;

// Control de errores
private $error = false;
private $error_msj="";

function __construct(){
    $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db_name,$this->port);
    if($this->conexion->connect_errno){
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion con la BBDD, revisar parametros";
    }
    
}

//funcion para saber si hay error en la conexion
function Error(){
    return $this->error;
}
// funcion que devuelve el mensaje de error
function msjerror(){
    return $this->error_msj;
}

public function realizarConsulta($consulta){
if($this->error == false){
    $resultado = $this->conexion->query($consulta);
    return $resultado;
}else{
    $this->error_msj="No se pudo realizar la consulta : ".$consulta;
    return null;
}

}

}


?>
