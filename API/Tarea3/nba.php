<?php

include "db.php";

class query extends db {
    function _construct(){
        // de esta forma realizamos la conexion a la base de datos
        parent::__construct();
    }
    
    function updateEquipo($array){
        //construimos la consulta
        $cosas=json_decode($array,true);       
        $sql="UPDATE equipos SET Nombre='".$cosas['Nombre']."',Ciudad='".$cosas['Ciudad']."',Conferencia='".$cosas['Conferencia']."', Division='".$cosas['Division']."' where Nombre= '".$cosas['nombreCambiar']."'";
        //Realizamos la consulta    
        $resultado = $this->realizarConsulta($sql);
     if($resultado !=null){
         //guardamos los equipos en un array llamado tabla
        return true;
     }else{
         return null;
     }
    }

    function mostrarEquipo($array){
        $cosas=json_decode($array,true);
        $sql= "SELECT * FROM equipos where Nombre= '".$cosas['Nombre']."'" ;
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

    
    function insertarEquipo($array){
        //construimos la consulta
        $cosas=json_decode($array,true);   
        $sql="INSERT INTO equipos (Nombre, ciudad,Conferencia,division) VALUES ('".$cosas['Nombre']."','".$cosas['Ciudad']."','".$cosas['Conferencia']."','".$cosas['Division']."')";          
        //Realizamos la consulta    
        $resultado = $this->realizarConsulta($sql);
     if($resultado !=null){
         //guardamos los equipos en un array llamado tabla
        return true;
     }else{
         return null;
     }
    }

    function borrarEquipo($array){
        //construimos la consulta
        $cosas=json_decode($array,true);
        $sql="DELETE FROM equipos where Nombre = '".$cosas['Nombre']."'";
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