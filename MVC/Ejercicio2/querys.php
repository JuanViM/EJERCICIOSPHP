<?php

include "db.php";
 class querys extends db {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     //devolvemos todos los partidos
     function mostrarTitles(){
         //construimos la consulta
         $sql="SELECT * FROM titles";
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

     function mostrarActores(){
         $sql= "SELECT * FROM `cast`";
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

     function mostrarActoresEpisodio($episodio){
        $sql= "SELECT * FROM `season_ep` where episode = $episodio;";
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

     function mostrarEpisodios(){
        $sql= "SELECT * FROM `season_ep` GROUP BY episode;";
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