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

    class Equipo
    {
        private $nombre;
        private $posicion;
        

        function __construct() {

            $this->nombre="Equipo sin nombre";
            $this->posicion=0;

        }

        function getPosicion()
        {

            return $this->posicion;
        }

        function setPosicion($posicionNueva)
        {

            $this->posicion = $posicionNueva;
        }

        function mostrarEquipo()

        {

            echo  "Equipo : " . $this->nombre . "<br>";
        }

        function ponerEquipo($nombreNuevo)
        {

            $this->nombre = $nombreNuevo;
        }

       
    }





    ?>

</body>

</html>