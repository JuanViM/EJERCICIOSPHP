<?php

include "clubbasquet.php";

$requestMode=$_SERVER["REQUEST_METHOD"];


if ($requestMode=="PUT") {
    $actualizar= new query();
    $array = array('id'=>$_GET['id'],'nombreJugador'=>$_GET['nombreJugador'],'posicion'=>$_GET['posicion'],'numero'=>$_GET['numero'],'edad'=>$_GET['edad']);
    $json=json_encode($array);
    $actualizar->updateJugador($json);

}else{
    echo json_encode(["resultado"=>"Fallo"]);

}

?>