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
        $i = -1.0;
        echo "<table>";
        echo "<tr>";
        echo "<th>Operacion</th>";
        echo "<th>Resultado</th>";
        echo "</tr>";
        while($i < 1.0) {
            echo "<tr>";
            echo "<th>sen ".$i."</th>";
            if(sin($i)<0) {
                echo "<th style='color:red'>".sin($i)."</th>";
            }elseif(sin($i)>0) {
                echo "<th style='color:blue'>".sin($i)."</th>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>cos ".$i."</th>";
            if(cos($i)<0) {
                echo "<th style='color:red'>".cos($i)."</th>";
            }elseif(cos($i)>0) {
                echo "<th style='color:blue'>".cos($i)."</th>";
            }
            echo "</tr>";
            $i = $i+0.1;
        }
        echo "</table>";
    ?>

    
</body>
</html>