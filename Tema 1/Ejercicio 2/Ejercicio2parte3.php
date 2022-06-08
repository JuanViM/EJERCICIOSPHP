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


    $equipos = array(
        "campanillas" => array("numJugadores" => 22, "PosicionEnLaTabla" => 1),
        "Atletic" => array("numJugadores" => 21, "PosicionEnLaTabla" => 4)
    );
    echo "Vista con print_r" . "<br>";
    print_r($equipos);

    echo "<br>";

    echo "Vista con var_dump" . "<br>";

    $teams = [];

    $teams[] = [
        "Nombre" => "Albacete",
        "NumJugadores" => 23,
        "PosicionTabla" => 1,
    ];

    $teams[] = [
        "Nombre" => "Málaga",
        "NumJugadores" => 20,
        "PosicionTabla" => 3,
    ];

    var_dump($teams);





    ?>

</body>

</html>