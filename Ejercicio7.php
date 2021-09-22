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

    $numero=2;

    $numero2=3;

    $numero3=1;

    if($numero>=$numero2 && $numero>=$numero3){
        echo 'La variable $numero tiene el mayor valor : '. $numero;
    }elseif($numero2>=$numero && $numero2>=$numero3){
        echo 'La variable $numero2 tiene el mayor valor : '. $numero2;
    }else{
        echo 'La variable $numero3 tiene el mayor valor : '. $numero3;
    }


    ?>
</body>
</html>