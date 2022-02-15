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
        var_dump($cosas);
       
        $sql="UPDATE jugadores SET nombreJugador='".$cosas['nombreJugador']."',posicion='".$cosas['posicion']."',numero=".$cosas['numero'].", edad=".$cosas['edad']." where id= ".$cosas['id']."";
        //Realizamos la consulta
        echo $sql;
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


