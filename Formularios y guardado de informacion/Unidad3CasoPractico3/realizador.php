<?php

require "conversion.php";

$moneda = new conversion();

if ($_POST["opciones"] == "lieur") {
    echo "Sus ". $_POST["monedas"] . " Libras, equivalen a " . $moneda->cambioLibraeuro($_POST["monedas"]) . " Euros";
}else if ($_POST["opciones"] == "eurli"){

    echo "Sus " . $_POST["monedas"] . " Euros,equivalen a " .$moneda->cambioEurli($_POST["monedas"]) . " Libras";

} else if ($_POST["opciones"] == "eurdol"){

    echo "Sus " . $_POST["monedas"] . " Euros,equivalen a " .$moneda->cambioEurDol($_POST["monedas"]) . " Dolares";

} else if ($_POST["opciones"] == "doleur"){
    echo "Sus " . $_POST["monedas"] . " Dolares,equivalen a " .$moneda->cambioDoleur($_POST["monedas"]) . " Euros";
}



?>