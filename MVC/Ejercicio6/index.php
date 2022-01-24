<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="insertarDB.php" method="post">
        <fieldset>
        <legend>CRUD Jugadores</legend>
        <p>Nombre <input type="text" name="nombre" placeholder="Ejem: Corey Brever"></p>
        <p>Procedencia <input type="text" name="procedencia" placeholder="Ejem: Miami"></p>
        <p>Altura <input type="text" name="altura" placeholder="Ejem: 6-9"></p>
        <p>Peso <input type="text" name="peso" placeholder="Ejem: 195"></p>
        <p>Posicion <input type="text" name="posicion" placeholder="Ejem: F-G"></p>
        <?php

include "Jugador.php";
$modificar = new querys();
$equipos=$modificar->mostrarEquipos();
echo "<p>Seleccione el Equipo del jugador <select name='nombreequi'></p>";

foreach ($equipos as $filaequipos) {
    echo "<option value=" . $filaequipos["Nombre"].">".$filaequipos["Nombre"] . "</option>";
   
}
    echo  "<p></select>";

    ?>
        <p><input type="submit" value="Insertar"></p>
    </form>
    <form method='get' action='actualizar.php'>
        <button type='submit'>Actualizar</button>
    </form>
    <form method='get' action='listajugadores.php'>
             <button type='submit'>Borrar</button>
    </form>

</body>
</html>