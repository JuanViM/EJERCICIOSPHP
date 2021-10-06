<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    error_reporting(0); //Lo he probado para quitar los errores del warning de la variable cuando no introducimos el dni correcto.
    require "Indemnizacion.php";

    $uno = new Factura();
    $nif45 = array("Nombre" => "Juan ", "Apellidos" => "Villegas Muñoz");
    $uno->setDni($nif45);
    echo $uno->datosCliente($nif45) . "<br>";
    $uno->setNumerofactura(1588);
    echo "Factura Numero: " . $uno->datosFactura() . "<br>";
    $total = 1500;
    $uno->setCantidad($total);
    echo "Factura sin IVA " . $uno->totalSinIVA() . "<br>";
    echo "Factura con IVA " . $uno->calculaIVA($total) . "<br>";
    echo "<hr>";

    $dos = new Indemnizacion();
    $nif5 = array("Nombre" => "Cristobal ", "Apellidos" => "Gonzalez Gomez");
    echo $dos->datosCliente($nif5) ."<br>";
    echo  "Cliente a indemnizar: " .$dos->imdemnizado($nif5) . "<br>";
    $total2=2000;
    $dos->setCantidad($total2);
    echo "Cantidad sin IVA: " . $dos->totalSinIVA() . "<br>";
    echo "Cantidad con IVA: " . $dos->calculaIVA($total2);







    ?>

</body>

</html>