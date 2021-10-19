<?php
 


echo $_POST["color1"] . "<br>";
echo $_POST["color2"]. "<br>";
echo $_POST["color3"]. "<br>";

echo dechex($_POST["color1"]). "<br>";
echo dechex($_POST["color2"]). "<br>";
echo dechex($_POST["color3"]). "<br>";

echo $hexa ="#". (dechex($_POST["color1"]) . dechex($_POST["color2"]).dechex($_POST["color3"]));

?>