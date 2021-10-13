<?php

  
    class Dos_ruedas extends Vehiculo 
    {
        
        private $cilindrada;

        public function poner_gasolina($litros){           
            $this->setPeso($this->getPeso()+$litros);
        }


    }

   
    

?>