<?php

echo "Nombre : " . $_POST["name"] . "<br>";
echo "Apellidos : " . $_POST["surname"] . "<br>";
echo "Curso : " . $_POST["curso"] . "<br>";
echo "Ciclo : " . $_POST["ciclo"] . "<br>";

$suma= ($_POST["PROG"]) + ($_POST["ED"]) + ($_POST["LLMM"]) + ($_POST["BBDD"]);
$media=$suma/4;
$maximo= max(($_POST["PROG"]), ($_POST["ED"]),($_POST["LLMM"]),($_POST["BBDD"]));
$minimo= min(($_POST["PROG"]), ($_POST["ED"]), ($_POST["LLMM"]),($_POST["BBDD"]));
echo "La nota media es " .$media . "<br>";
echo "La nota maxima es " . $maximo . "<br>";
echo "La nota minima es " . $minimo . "<br>";


?>