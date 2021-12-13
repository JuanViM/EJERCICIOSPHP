<?php

class Departamento {
    
    private $num_departamento;
    private $nombre;
    private $ciudad;

    function __construct($num_departamento,$nombre,$ciudad) {
        $this->num_departamento=$num_departamento;
        $this->nombre=$nombre;
        $this->ciudad=$ciudad;  
    }
    

    /**
     * Get the value of num_departamento
     */ 
    public function getNum_departamento()
    {
        return $this->num_departamento;
    }

    /**
     * Set the value of num_departamento
     *
     * @return  self
     */ 
    public function setNum_departamento($num_departamento)
    {
        $this->num_departamento = $num_departamento;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }
}


?>