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

    define('TAM',10);
   
echo "<table>";

    $numero=1;

    for ($i=1; $i<=TAM; $i++){
        if ($i % 2 == 0)
        echo "<tr bgcolor=grey>";
        else
        echo "<tr>";
        for ($x=1;$x<=TAM; $x++){
            echo "<td>", $numero, "</td>";
            $numero=$numero+1;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>