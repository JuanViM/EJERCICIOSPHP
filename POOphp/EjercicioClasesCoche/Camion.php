<?php

    class Camion extends Cuatro_ruedas 
    {

        private $longitud;

        public function añadir_remolque($longitud_remolque){

            $this->longitud+=$longitud_remolque;
        }
        

        /**
         * Get the value of longitud
         */ 
        public function getLongitud()
        {
                return $this->longitud;
        }
    }
    

?>