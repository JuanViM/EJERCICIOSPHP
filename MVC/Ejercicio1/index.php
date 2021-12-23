<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #dos{
            margin-top: -545px;
            margin-left: 500px;

        }
        p {
            text-align: center;
        }

        #primero {
            display: inline;
            width: 900px;
            height: 150px;
        }

        #segundo {
            display: inline;
            width: 900px;
            height: 150px;
        }

        #tabla1 {
               
            
            
        }

        #tabla2 {
            
            
        }
    </style>
</head>

<body>


    <?php
    //incluimos librerias

    include_once "querys.php";

    $equipos = new querys();


    echo "<fieldset id='primero'>";

    echo "<legend><h4>Seleccione los equipos para ver sus resultados en la temporada</h4></legend>";
    echo "<form action='resultados.php' method='post'>";

    echo "<p>Nombre del equipo <select name='partidos'></p>";


    $tablaEquipos = $equipos->devolverEquipos();
    $tablaPartidos = $equipos->mostrarPartidos();
    $tablaTemporada = $equipos->mostrarTemporada();
    $tablaAsistencia = $equipos->mostrarAsistencias();
    $tablaPuntos = $equipos->mostrarPuntos();

    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }
    echo "</select>";

    echo "<p>Temporada <select name='temporada'></p>";

    foreach ($tablaTemporada as $filaTemporada) {
        echo "<option value=" . $filaTemporada["temporada"] . ">" . $filaTemporada["temporada"] . "</option>";
    }
    echo "</select>";
    echo "<p><input value='Enviar' type='submit'></p>";
    echo "</form>";
    echo "</fieldset>";

    echo "<fieldset id='segundo'>";
    echo "<legend><h4>Seleccione el equipo para ver sus jugadores</h4></legend>";

    echo "<form action='listado.php' method='post'>";

    echo "<p>Nombre del equipo <select name='equipo'></p>";


    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }
    echo "</select>";

    echo "<p><input value='Enviar' type='submit'></p>";
    echo "</form>";
    echo "</fieldset>";
    echo "<div id='uno'>";
    echo "<h4>Tabla de asistencias</h4>";
    echo "<table border='1' id='tabla1'>";
    echo "<th>asistencias</th>";
    echo "<th>Nombre</th>";
    echo "<th>Temporada</th>";


    foreach ($tablaAsistencia as $filaasistencias) {
        echo "<tr>";
        echo "<td>" . $filaasistencias["asistencias"] . "</td>";
        echo "<td>" . $filaasistencias["nombre"] . "</td>";
        echo " <td>" . $filaasistencias["temporada"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    echo "<div id='dos'>";
    echo "<h4>Tabla de Puntos</h4>";
    echo "<table border='1' id='tabla2'>";
    echo "<th>Puntos</th>";
    echo "<th>Nombre</th>";
    echo "<th>Temporada</th>";


    foreach ($tablaPuntos as $filapuntos) {
        echo "<tr>";
        echo "<td>" . $filapuntos["puntos"] . "</td>";
        echo "<td>" . $filapuntos["nombre"] . "</td>";
        echo "<td>" . $filapuntos["temporada"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";


    ?>
</body>

</html>