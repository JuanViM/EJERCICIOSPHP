<?php



if ((substr($_POST["hexa"], 0, 1)== "#") && (!empty($_POST["hexa"]))) {
   $pri = substr($_POST["hexa"], 1, 2);
   $seco = substr($_POST["hexa"], 3, 2);
   $terc = substr($_POST["hexa"], 5, 2);
   echo (hexdec($pri))."<br>";
   echo (hexdec($seco))."<br>";
   echo (hexdec($terc))."<br>";
}else {
    echo "Debe introducir # al comienzo y mas de 7 digitos";
}


   



?>