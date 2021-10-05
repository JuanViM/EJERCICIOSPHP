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

    require "Equipo.php";
    
    
    
    $equipo= new Equipo();
    for ($i=1; $i <=9; $i++) { 
        $jugadorequipo=new Jugador($i);
        $jugadorequipo->addPtos(rand(20,100));
        $equipo->addJug($jugadorequipo);
        
        
        
    }

   echo "El total de puntos conseguido por el equipo ha sido " .$equipo->gettotal();

    echo "<hr>";


    for ($i=1; $i <= 12 ; $i++) { 

        $puntos=rand(20,100);
        echo "La tirada numero $i ha sido de $puntos" . "<br>";
    }


    ?>
    
</body>
</html>