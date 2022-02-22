<?php

include "nba.php";

$requestMode=$_SERVER["REQUEST_METHOD"];


if ($requestMode=="GET") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre']);
    $json=json_encode($array);
    $select=$actualizar->mostrarEquipo($json);
    var_dump($select);
}else if ($requestMode=="POST") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre'],'Ciudad'=>$_GET['ciudad'],'Conferencia'=>$_GET['conferencia'],'Division'=>$_GET['division']);
    $json=json_encode($array);
    $actualizar->insertarEquipo($json);
    $array2 = array('Nombre'=>$_GET['nombre']);
    $json2=json_encode($array2);
    $select=$actualizar->mostrarEquipo($json2);
    var_dump($select);

}else if ($requestMode=="PUT") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre'],'Ciudad'=>$_GET['ciudad'],'Conferencia'=>$_GET['conferencia'],'Division'=>$_GET['division'],'nombreCambiar'=>$_GET['nombreCambiar']);
    $json=json_encode($array);
    $actualizar->updateEquipo($json);
    $array2 = array('Nombre'=>$_GET['nombre']);
    $json2=json_encode($array2);
    $select=$actualizar->mostrarEquipo($json2);
    var_dump($select);
      
}else if ($requestMode=="DELETE") {
    $actualizar= new query();
    $array = array('Nombre'=>$_GET['nombre']);
    $json=json_encode($array);
    $actualizar->borrarEquipo($json);    

}else{
    echo json_encode(["resultado"=>"Fallo"]);

}

?>