<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <?php

        $equipo = [];

        $equipo = array(
            array(
                "Nombre" => "Betis",
                "NumeroJugadores" => 22,
                "PosicionTabla" => 2,
            ),
            array(
                "Nombre" => "Villareal",
                "NumeroJugadores" => 22,
                "PosicionTabla" => 2,
            )
        );




        echo "<tr><th>Nombre equipo </th> <th> Numero Jugadores </th> <th> Posicion </th> </tr>";

    

        foreach ($equipo as $key) {
            echo "<tr>";
            foreach ($key as $valor) {
                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }


        echo "</table>";
        ?>

</body>

</html>