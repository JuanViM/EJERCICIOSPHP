<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            text-align: center;
        }
    </style>
</head>
<body>
<?php

include_once "querys.php";
$actores = new querys();
$tablaEpisodios = $actores->mostrarEpisodios();

    echo "<div>";
    echo "<h4>Seleccione el episodio para ver los actores participantes</h4>";
    echo "<form action method='post'>";

    echo "<p>Numero del capitulo <select name='capitulo'></p>";


    foreach ($tablaEpisodios as $filaEpisodios) {

        echo "<option value=" . $filaEpisodios["episode"] . ">" . $filaEpisodios["episode"] . "</option>";
    }
    echo "</select>";
    echo "<p><input value='Enviar' type='submit'></p>";
    echo "</fieldset>";
    echo "</div>";
?>
<table border="2" align="center">
    <th>Personaje</th>
    <th>Actor</th>
    <th>Episodio</th>
    
    <tr>

        <?php
        
        $episodio = $_POST["capitulo"];

        $tablaActores = $actores->mostrarActoresEpisodio($episodio);

        foreach ($tablaActores as $filas) {
            echo " <td>" . $filas["serie_name"] . "</td>";
            echo "<td>" . $filas["name"] . "</td>";
            echo " <td>" . $filas["episode"] . "</td>";
            echo "</tr>";
        }

        ?>

</table>
</body>

</html>