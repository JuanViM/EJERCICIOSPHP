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


    $escuela[0]=array(1,14,8,3);
      $escuela[1]=array(6,19,7,2);
        $escuela[2]=array(3,13,4,1);

        
   

    for ($i=0; $i <=2; $i++) { 
        if ($i==0) {
            echo " <tr> <th>Basico</th>";
        }elseif ($i==1) {
            echo "<tr> <th>medio</th>";
        }else {
            echo "<tr> <th>Perfeccionamiento</th>";
        }
        
        
      for ($x=0; $x <=3 ; $x++) { 
          if ($x==0) {
              echo "<th>Ingles</th>";
              echo "<td>". $escuela[$i][$x];  
              
          }elseif ($x==1) {
            echo "<th>Frances</th>";
            echo "<td>". $escuela[$i][$x]; 
            
          }elseif ($x==2) {
            echo "<th>Aleman</th>";
            echo "<td>". $escuela[$i][$x]; 
            
          }elseif ($x==3) {
            echo "<th>Ruso</th>";
            echo "<td>". $escuela[$i][$x]; 
           
          }
          
        }
        echo "</tr>";
    }


    "</table>";



    ?>
</body>
</html>