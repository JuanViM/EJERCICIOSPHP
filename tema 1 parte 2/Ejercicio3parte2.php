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

    $dados= rand(2,7);

    echo "Se han lanzado $dados con los resultados " ."<br>";

    while(!$dados<=0){
      echo  rand(1,6) . "<br>";
      $dados--;
    }

    


?>

</body>
</html>