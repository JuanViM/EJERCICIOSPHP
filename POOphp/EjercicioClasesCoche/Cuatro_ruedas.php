<?php

    

    class Cuatro_ruedas extends Vehiculo
    {
        
        private $numero_puertas;

        public function repintar($color){
            $this->setColor($this->color=$color);
        }
    }
    

?>