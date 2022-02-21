<?php

include "clubbasquet.php";

$requestMode=$_SERVER["REQUEST_METHOD"];


if ($requestMode=="DELETE") {
    $actualizar= new query();
    $array = array('id'=>$_GET['id']);
    $json=json_encode($array);
    $actualizar->updateJugador($json);

}else{
    echo json_encode(["resultado"=>"Fallo"]);

}

?>