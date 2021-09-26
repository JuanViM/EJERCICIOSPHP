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

$numero=1;

while($numero<=10){

    echo "tabla del $numero";
    echo "<br>";

    for($i=1;$i<=10;$i++){
        echo  "$numero * $i= " . $numero*$i;
        echo "<br>";

    }
    $numero++;

}

?>
    
</body>
</html>