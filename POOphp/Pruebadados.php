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

    include "Dado.php";

    for ($i=1; $i <= 12; $i++) { 
        $dado= new dado;
       echo "Dado $i"   . $dado->tirarDado(1,12) ."<br>";
    }


    ?>
</body>
</html>