<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Jugador</title>
</head>
<body>

<?php

class Jugador 
{
    private $numeroJug;
    private $ptos;

    //constructor Jugador
   function __construc($numeroJug){
    $this->numeroJug = $numeroJug;
    }

    //getters

    
    public function getNumJug()
    {
        return $this->numeroJug;
    }

    public function getPtos()
    {
        return $this->ptos;
    }



    public function addPtos($ptos){

        if ($ptos>0) {
            $this->ptos+=$ptos;
        }
        


    }
}



?>
    
</body>
</html>