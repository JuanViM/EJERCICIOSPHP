<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h4{
            text-align: center;
        }
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

    </style>
</head>

<body>

        <table border="1" align="center">
            <th>titulo</th>
            <th>Trama</th>
            <th>creadores</th>
            <th>Año comienzo</th>
            <th>Año Fin</th>
            <th>Temporadas</th>
            <th>genero</th>
            <tr>

    <?php
    //incluimos librerias

    include_once "querys.php";

    $serie = new querys();

     $tablaSerie=$serie->mostrarTitles();
     $tablaEpisodios=$serie->mostrarEpisodios();
     

    echo "<fieldset id='primero'>";
    echo "<p>Pulse para ver todos los actores de la serie <button><a href='actores.php'>Pulsar</button></a></p>";
    echo "</fieldset>";
   foreach($tablaSerie as $fila){
       echo "<td>".$fila["title"]."</td>";
       echo "<td>".$fila["plot"]."</td>";
       echo "<td>".$fila["creators"]."</td>";
       echo "<td>".$fila["season_start"]."</td>";
       echo "<td>".$fila["season_end"]."</td>";
       echo "<td>".$fila["seasons"]."</td>";
       echo "<td>".$fila["generes"]."</td>";
       echo "</tr>";
   }

   echo "<fieldset id='segundo'>";
    echo "<h4>Seleccione el episodio para ver los actores participantes</h4>";
    echo "<form action='actoresTem.php' method='post'>";

    echo "<p>Numero del capitulo <select name='capitulo'></p>";


    foreach ($tablaEpisodios as $filaEpisodios) {

        echo "<option value=" . $filaEpisodios["episode"] . ">" . $filaEpisodios["episode"] . "</option>";
    }
    echo "</select>";
    echo "<p><input value='Enviar' type='submit'></p>";
    echo "</fieldset>";
  
    /*

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

*/
    ?>
    </table>
</body>

</html>