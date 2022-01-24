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
         include_once "Equipo.php";
         $equipos = new querys();
         $tablaEquipos = $equipos->mostrarEquipos();
         $tablaTemporada = $equipos->mostrarTemporada();
        echo "<p>Nombre del equipo local <select name='equipoLocal'></p>";

    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }   
    echo "</select>";
    echo "<p>Nombre del equipo visitante <select name='equipovisitante'></p>";

    foreach ($tablaEquipos as $filaEquipos) {

        echo "<option value=" . $filaEquipos["Nombre"] . ">" . $filaEquipos["Nombre"] . "</option>";
    }   
    echo "</select>";
    echo "<p>Temporada de los partidos <select name='temporada'></p>";

    foreach ($tablaTemporada as $filaTemporada) {

        echo "<option value=" . $filaTemporada["temporada"] . ">" . $filaTemporada["temporada"] . "</option>";
    }   
    echo "</select>";

    ?>
        <input value="Filtrar" type="submit">   
        </fieldset>         
    </form>

    <form action="insertarDB.php" method="post">
        <fieldset>
        <legend>CRUD Equipos</legend>
        <p>Nombre <input type="text" name="nombre" placeholder="Ejem: Lakers"></p>
        <p>Ciudad <input type="text" name="ciudad" placeholder="Ejem: Miami"></p>
        <p>Conferencia <input type="text" name="conferencia" placeholder="Ejem: East"></p>
        <p>Division <input type="text" name="division" placeholder="Ejem: Atlantic"></p>
        <p><input type="submit" value="Insertar"></p>
    </form>
    <form method='get' action='actualizar.php'>
        <button type='submit'>Actualizar</button>
    </form>
    <form method='get' action='listaequipos.php'>
             <button type='submit'>Borrar</button>
    </form>

</body>
</html>