<?php

class Vehiculo 
{
    private $color;
    private $peso;


    function __construct($color, $peso)
    {

        $this->color = $color;
        $this->peso = $peso;
    }


    public function circula()
    {

        return "El coche circula";
    }

    public function añadir_persona($peso_persona)
    {

        $this->peso += $peso_persona;

    }

    //GETTERS
    //GET DE PESO
    public function getPeso()
    {
        return $this->peso;
    }

    // GET DE COLOR
    public function getColor()
    {
        return $this->color;
    }



    //SETTERS
    //SET DE COLOR
    public function setColor($color)
    {
        $this->color = $color;

    }

    //SET DE PESO
    public function setPeso($peso)
    {
        $this->peso = $peso;

        
    }
}
