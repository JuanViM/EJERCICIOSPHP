<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php

   
    /*
    for ($i=0; $i <= 5 ; $i++) { 
        
        for ($x=0; $x < 6; $x++) { 
            $matriz[$i][$x]= rand(-5,5);
            
        }
        
    }

        for ($i=0; $i < 5 ; $i++) { 
            for ($x=0; $x < 6; $x++) { 
                if ($matriz[$i][$x]<0) {
                    echo "El numero " . $matriz[$i][$x] . " es negativo" . "<br>";
                }elseif ($matriz[$i][$x]==0) {
                    echo "El numero " . $matriz[$i][$x] . " es cero" . "<br>";
                }else {
                    echo "El numero " . $matriz[$i][$x] . " es positivo" . "<br>";
                }
            }
        }
  
  */

  
  for ($i=0; $i <= 5 ; $i++) { 
        
    for ($x=0; $x < 6; $x++) { 
        $matriz[$i][$x]= rand(-5,5);
        
    }
    
}
$positivo=0;
$negativo=0;
$cero=0;

    for ($i=0; $i < 5 ; $i++) { 
        echo "<tr>";
        for ($x=0; $x < 6; $x++) { 
            echo "<td>" . $matriz[$i][$x] . "</td>";
            if ($matriz[$i][$x]<0) {
                
                $negativo++;
                
            }else if ($matriz[$i][$x]==0) {
                
                $cero++;
                
            }else {
                
                $positivo++;
                
            }

        }
        echo "</tr>";
    }

    echo "</table>";

    echo "<p>Hay $positivo numeros positivos</p>";
    echo "<p>Hay $negativo numeros negativos</p>";
    echo "<p>Hay $cero numeros ceros</p>";


    ?>
    
</body>
</html>