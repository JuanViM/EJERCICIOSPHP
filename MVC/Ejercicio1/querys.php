<?php
include "db.php";
 class querys extends db {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     //devolvemos todos los partidos
     function devolverEquipos(){
         //construimos la consulta
         $sql="SELECT * FROM equipos";
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

     function mostrarPartidos(){
         $sql= "SELECT * FROM PARTIDOS";
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
     function mostrarTemporada(){
        $sql= "SELECT DISTINCT temporada FROM `partidos`";
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

     function mostrarJugadores($equipo){
        $sql= "SELECT * FROM `jugadores` where Nombre_equipo ='$equipo'";
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

    function mostrarAsistencias(){
        $sql= "SELECT MAX(estadisticas.Asistencias_por_partido) as asistencias,jugadores.nombre,estadisticas.jugador ,estadisticas.temporada FROM estadisticas,jugadores where jugadores.codigo=estadisticas.jugador GROUP by estadisticas.temporada;";
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

    function mostrarPuntos(){
        $sql= "SELECT MAX(estadisticas.Puntos_por_partido) as puntos,jugadores.nombre,estadisticas.jugador ,estadisticas.temporada FROM estadisticas,jugadores where jugadores.codigo=estadisticas.jugador GROUP by estadisticas.temporada";
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