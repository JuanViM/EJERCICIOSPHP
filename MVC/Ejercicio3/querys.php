<?php
include "dbNBA.php";
 class querys extends dbNBA {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     //devolvemos todos los partidos
     function mostrarPartidos($equipo){
         //construimos la consulta
         $sql="SELECT * FROM partidos where equipo_local = '$equipo'";
         //Realizamos la consulta
         $resultado = $this->realizarConsulta($sql);
         if($resultado !=null){
             //guardamos los partidos en un array llamado tabla
             $tabla=[];
             while($fila=$resultado->fetch_assoc()){
                 $tabla[]=$fila;
             }
             return $tabla;
         }else{
             return null;
         }
     }
    
    function devolverEquipos(){
        //construimos la consulta
        $sql="SELECT * from equipos";
        //Realizamos la consulta
        $resultado = $this->realizarConsulta($sql);
         if($resultado !=null){
             //guardamos los equipos en un array llamado tabla
             $tabla=[];
             while($fila=$resultado->fetch_assoc()){
                 $tabla[]=$fila;
             }
             return $tabla;
         }else{
             return null;
         }

    }
    



    }

?>