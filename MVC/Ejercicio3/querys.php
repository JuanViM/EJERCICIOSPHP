<?php
include "dbNBA.php";
 class querys extends dbNBA {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     //devolvemos todos los partidos
     function mostrarPartidos($equipolocal,$equipovis,$temporada){
         //construimos la consulta
         $sql="SELECT * FROM partidos where equipo_local = '$equipolocal' and equipo_visitante = '$equipovis' and temporada =  '$temporada'";
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
    
    function mostrarEquipos(){
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

    function mostrarTemporada(){
        //construimos la consulta
        $sql="SELECT * FROM `partidos` group by temporada";
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