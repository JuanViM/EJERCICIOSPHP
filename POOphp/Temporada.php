<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require "equipo.php";
    /*
    $equipo= new equipo();
    for ($i=1; $i <=9; $i++) { 
        $jugador=new $jugador($i);
        $jugador->addPtos(rand(20,100));
        $equipo->addJug($jugador);
        
        
        
    }

    $equipo->gettotal();
*/

    $jugador3=new Jugador(7);
    $equipo=new equipo();
    $jugador= new Jugador(6);
    echo $jugador->getNumJug() . "<br>";
    echo $jugador3->getNumJug();
    $jugador->addPtos(rand(20,100));
    
   
   
    echo $jugador->getPtos();

    ?>
    
</body>
</html>