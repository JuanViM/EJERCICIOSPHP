<?php
include "db.php";
 class querys extends db {
     function __construct(){
         // de esta forma realizamos la conexion a la base de datos
         parent::__construct();
     }
     
    
    //devolvemos todos los jugadores
    function mostrarJugadores(){
        //construimos la consulta
        $sql="SELECT * from jugadores";
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

    function mostrarEquipos(){
        //construimos la consulta
        $sql="SELECT * FROM `equipos`";
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

    
function insertarJugador($nombre,$procedencia,$altura,$peso,$posicion,$nombreequipo){
    //construimos la consulta
    $sql="INSERT INTO jugadores (Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES ('$nombre','$procedencia','$altura',$peso,'$posicion','$nombreequipo')";
    //Realizamos la consulta
    $resultado = $this->realizarConsulta($sql);
     if($resultado !=null){
         //guardamos los equipos en un array llamado tabla
        return true;
     }else{
         return null;
     }
}

function modificarJugador($nombre,$procedencia,$altura,$peso,$posicion,$nombrequipo,$jugador){
    //construimos la consulta
    $sql="UPDATE jugadores set Nombre='$nombre',Procedencia='$procedencia',Altura='$altura',Peso='$peso',Posicion='$posicion',Nombre_equipo='$nombrequipo' where Nombre= '$jugador'";
    //Realizamos la consulta
    $resultado = $this->realizarConsulta($sql);
     if($resultado !=null){
         //guardamos los equipos en un array llamado tabla
        return true;
     }else{
         return null;
     }
}

function borrarJugador($nombre){
    //construimos la consulta

    $sql="DELETE FROM jugadores where nombre = '$nombre'";

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