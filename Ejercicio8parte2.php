<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 parte 2 PHP</title>
</head>
<body>

<table border="1">

    <?php

    $filamayor=0;
    $suma=0;
    $columna=0;

    for ($i=0; $i <6; $i++) { 
        echo "<tr>";
        
        
        for ($x=0; $x <6; $x++) { 
            echo "<td>";
           echo $numeros[$i][$x]= rand(1,100);
            echo "</td>";
            $suma=$suma+$numeros[$i][$x];
            
        }
        echo "</tr>";
        if ($filamayor<=$suma) {
            $filamayor=$suma;
             $columna=$i+1;
            $suma=0;
     
         }
         $suma=0;
    }

    echo "</table>";


    echo  "<br>" . "La fila cuya suma es mayor a las demas ha sido la $columna y su suma ha sido $filamayor";

    ?>
    
</body>
</html>