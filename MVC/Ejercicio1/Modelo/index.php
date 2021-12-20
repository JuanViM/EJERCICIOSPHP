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
        p{
            text-align: center;
        }
        
    </style>
</head>
<body>


    <?php
    //incluimos librerias
    
    include_once "equipos.php";

    $equipos=new equipos();
    
  echo "<h4>Selecciones los equipos de los cuales desea ver sus resultados y su temporada</h4>";
    echo "<form action='resultados.php' method='post'>";
   
    echo "<p>Nombre del equipo <select name='partidos'></p>";
    

$tablaEquipos=$equipos->devolverEquipos();
$tablaPartidos=$equipos->mostrarPartidos();
$tablaTemporada=$equipos->mostrarTemporada();

foreach($tablaEquipos as $filaEquipos){
    
    echo "<option value=".$filaEquipos["Nombre"].">".$filaEquipos["Nombre"]."</option>";
  
    
}
echo "</select>";

echo "<p>Temporada <select name='temporada'></p>";

foreach($tablaTemporada as $filaTemporada){
    echo "<option value=".$filaTemporada["temporada"].">".$filaTemporada["temporada"]."</option>";
}
echo "</select>";
echo "<p><input value='Enviar' type='submit'></p>";
echo "</form>";
?> 
</body>
</html>