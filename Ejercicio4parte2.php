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

    "<table>";
    
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
  
  


    ?>
    
</body>
</html>