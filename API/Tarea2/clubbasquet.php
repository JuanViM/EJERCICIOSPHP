<?php

include "db.php";

class query extends db {
    function _construct(){
        // de esta forma realizamos la conexion a la base de datos
        parent::__construct();
    }
    //devolvemos todos los partidos
    function updateJugador($array){
        //construimos la consulta
        $cosas=json_decode($array,true);
        
        $sql="DELETE FROM `jugadores` WHERE `jugadores`.`id` = ".$cosas['id']."";
        
        //Realizamos la consulta
        
        $resultado = $this->realizarConsulta($sql);
     if($resultado !=null){
         //guardamos los equipos en un array llamado tabla
        return true;
     }else{
         return null;
     }
    }





    }

    ?>


