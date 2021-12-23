<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de jugadores</title>
    <style>
      
        div{
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    include_once "querys.php";
    $equipos = new querys();
    $tablaEquipos = $equipos->devolverEquipos();
    $tablaPartidos = $equipos->mostrarPartidos();
    $tablaTemporada = $equipos->mostrarTemporada();
    $tablaAsistencia = $equipos->mostrarAsistencias();
    $tablaPuntos = $equipos->mostrarPuntos();
    echo "<div>";
     
    echo "<legend><h4>Seleccione el equipo para ver sus jugadores</h4></legend>";

    echo "<form method='post'>";

    echo "<p>Nombre del equipo <select name='equipo'></p>";


    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }
    echo "</select>";

    echo "<p><input value='Enviar' type='submit'></p>";
    echo "</form>";
    echo "</div>";
    
    
    ?>
    <table border="2" align="center">
        <th>Nombre</th>
        <th>Procedencia</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>Posicion</th>
        <th>Equipo</th>
        <tr>

            <?php
            
            $equipo = $_POST["equipo"];

            $tablaequipos = $equipos->mostrarJugadores($equipo);

            foreach ($tablaequipos as $filas) {
                echo " <td>" . $filas["Nombre"] . "</td>";
                echo "<td>" . $filas["Procedencia"] . "</td>";
                echo " <td>" . $filas["Altura"] . "</td>";
                echo "<td>" . $filas["Peso"] . "</td>";
                echo "<td>" . $filas["Posicion"] . "</td>";
                echo "<td>" . $filas["Nombre_equipo"] . "</td>";
                echo "</tr>";
            }

            ?>

    </table>
</body>

</html>