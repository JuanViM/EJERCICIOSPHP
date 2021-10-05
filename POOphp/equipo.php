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
        private $jugadores = array();

        function __construct()
        {
        }


        function addJug($player)
        {
            $this->jugadores[]=$player;
        }

        public function getJug($numJugador)
        {
            return $this->player;
        }

        function getTotal(){
            $totalpuntos=0;
            foreach ($this->jugadores as $player) {
                $totalpuntos=$totalpuntos+$player->getPtos();
            }
            return $totalpuntos;
        }
    }






    ?>

</body>

</html>