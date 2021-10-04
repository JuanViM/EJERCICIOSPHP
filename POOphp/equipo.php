<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Equipo</title>
</head>

<body>

    <?php

    require "Jugador.php";
    class Equipo
    {
        private $jugadores =  array();

        function __construct()
        {
        }


        function addJug($Jugador)
        {
            $this->jugadores=$Jugador;
        }

        public function getJug($numJugador)
        {
            return $this->Jugador;
        }

        function getTotal(){
            $totalpuntos=0;
            foreach ($this->Jugadores as $jugador) {
                $totalpuntos=$totalpuntos+$jugador->getPtos();
            }
            return $totalpuntos;
        }
    }






    ?>

</body>

</html>