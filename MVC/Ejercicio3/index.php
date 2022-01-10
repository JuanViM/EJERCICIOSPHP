<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="filtrado.php" method="post">
        <fieldset>
        <legend>Filtrar por partidos</legend>
        <p>Seleccione el equipo local para ver todos sus partidos</p>
        <?php
         include_once "querys.php";
         $equipos = new querys();
         $tablaEquipos = $equipos->devolverEquipos();
        echo "<p>Nombre del equipo <select name='equipo'></p>";


    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }   
    echo "</select>";
    ?>
        <input value="Filtrar" type="submit">   
        </fieldset>         
    </form>
</body>
</html>