<?php
include "db.php";
 class partidos extends db {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     //devolvemos todos los partidos
     function devolverPartidos(){
         //construimos la consulta
         $sql="SELECT * FROM PARTIDOS";
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

     
     
         
     }

 

?>