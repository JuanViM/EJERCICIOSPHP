<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 PHP</title>
</head>
<body>
<table border="1">
<?php

$numero=3;

for ($i=0; $i < 6; $i++) {   
    echo "<tr>";
    for ($x=0; $x< 4; $x++) { 
        $Multiplos[$i][$x]=$numero;
        echo "<td>" .  $Multiplos[$i][$x] . "</td>";
        $numero=$numero+3;
    }
    echo "</tr>";
}

echo "</table>";
?>
    
</body>
</html>