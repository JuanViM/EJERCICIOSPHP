<?php

class Coche extends Cuatro_ruedas
{
    private $numero_cadenas_nieve;

    public function añadir_cadenas_nieve($num){

            $this->numero_cadenas_nieve+=$num;
    }

    public function quitar_cadenas_nieve($num){

        $this->numero_cadenas_nieve-=$num;

    }
    
    

    /**
     * Get the value of numero_cadenas_nieve
     */ 
    public function getNumero_cadenas_nieve()
    {
        return $this->numero_cadenas_nieve;
    }
}


?>