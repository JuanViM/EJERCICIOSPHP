<?php

include "nba.php";

$requestMode=$_SERVER["REQUEST_METHOD"];



if ($requestMode=="GET") {
    $actualizar= new query();
    
    
    $select=$actualizar->mostrarEquipo($_GET['nombre']);

    $datos = json_decode($select,true);
    
    echo "<h1>Datos del Equipo insertado</h1>";
    
    echo "<h2>Nombre: ".$datos['Nombre']."</h2>";
    
    echo "<h2>ciudad: ".$datos['Ciudad']."</h2>";
    
    echo "<h2>conferencia: ".$datos['Conferencia']."</h2>";
    
    echo "<h2>division: ".$datos['Division']."</h2>";

}else if ($requestMode=="POST") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre'],'Ciudad'=>$_GET['ciudad'],'Conferencia'=>$_GET['conferencia'],'Division'=>$_GET['division']);
    $json=json_encode($array);
    $actualizar->insertarEquipo($json);
    
    $select=$actualizar->mostrarEquipo($_GET['nombre']);

    $datos = json_decode($select,true);
    
    echo "<h1>Datos del Equipo insertado</h1>";
    
    echo "<h2>Nombre: ".$datos['Nombre']."</h2>";
    
    echo "<h2>Ciudad: ".$datos['Ciudad']."</h2>";
    
    echo "<h2>Conferencia: ".$datos['Conferencia']."</h2>";
    
    echo "<h2>Division: ".$datos['Division']."</h2>";
   
    

}else if ($requestMode=="PUT") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre'],'Ciudad'=>$_GET['ciudad'],'Conferencia'=>$_GET['conferencia'],'Division'=>$_GET['division'],'nombreCambiar'=>$_GET['nombreCambiar']);
    $json=json_encode($array);
    $actualizar->updateEquipo($json);
    
    $select=$actualizar->mostrarEquipo($_GET['nombre']);

    $datos = json_decode($select,true);
    
    echo "<h1>Datos del Equipo insertado</h1>";
    
    echo "<h2>Nombre: ".$datos['Nombre']."</h2>";
    
    echo "<h2>ciudad: ".$datos['Ciudad']."</h2>";
    
    echo "<h2>conferencia: ".$datos['Conferencia']."</h2>";
    
    echo "<h2>division: ".$datos['Division']."</h2>";
     
      
}else if ($requestMode=="DELETE") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre']);
    $json=json_encode($array);
    $actualizar->borrarEquipo($json);    

}else{
    echo json_encode(["resultado"=>"Fallo"]);

}



?>