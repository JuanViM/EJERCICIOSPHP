<?php
require '../model/db.php';

class seguridad extends usuarios_db
{
    function __construct()
    {
        session_start();
        if(!empty($_SESSION["usuario"])){
            $this->usuario=$_SESSION["usuario"];
        }
    }
    public function getUsuario(){return $this-> usuario;}
    public function addUsuario($usuario,$pass,$remember =false)
    {
        $_SESSION["usuario"]=$usuario;
        $this->usuario=$usuario;    
        if($remember){
            setcookie("usuario",$usuario,time()+(60*60));
            setcookie("pass",$pass,time()+(60*60));
        }
    }
}

?>