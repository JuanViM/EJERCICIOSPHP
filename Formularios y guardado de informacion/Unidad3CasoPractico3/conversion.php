<?php

class conversion{
    
    private $moneda;
    

    /**
     * Get the value of euros
     */ 
    public function getEuros()
    {
        return $this->moneda;
    }

    /**
     * Set the value of euros
     *
    
     */ 
    public function setEuros($moneda)
    {
        $this->moneda = $moneda;

      
    }

    public function cambioEurli($moneda){

        $libra =$moneda * 0.84 ;

        return $libra;

    }

    public function cambioLibraeuro($moneda){

        $euro=$moneda * 1.19 ;

        return $euro;

    }

    public function cambioDoleur($moneda){

        $euro= $moneda * 0.86;

        return $euro;

    }

    public function cambioEurDol($moneda){

        $dolares = $moneda * 1.16;

        return $dolares;

    }

}


?>