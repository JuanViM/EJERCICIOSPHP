<?php

class Empleados {

    private $num_empleado;
    private $nombre;
    private $puesto;
    private $jefe;
    private $fecha_alta;
    private $salario;
    private $comision;
    private $num_departamento;
    

    function __construct($num_empleado,$nombre,$puesto,$jefe,$fecha_alta,$salario,$comision,$num_departamento) {

        $this->num_empleado=$num_empleado;
        $this->nombre=$nombre;
        $this->puesto=$puesto;
        $this->jefe=$jefe;
        $this->fecha_alta=$fecha_alta;
        $this->salario=$salario;
        $this->comision=$comision;
        $this->num_departamento=$num_departamento;
        
    }

    /**
     * Get the value of num_empleado
     */ 
    public function getNum_empleado()
    {
        return $this->num_empleado;
    }

    /**
     * Set the value of num_empleado
     *
     * @return  self
     */ 
    public function setNum_empleado($num_empleado)
    {
        $this->num_empleado = $num_empleado;

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
     * Get the value of puesto
     */ 
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set the value of puesto
     *
     * @return  self
     */ 
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get the value of jefe
     */ 
    public function getJefe()
    {
        return $this->jefe;
    }

    /**
     * Set the value of jefe
     *
     * @return  self
     */ 
    public function setJefe($jefe)
    {
        $this->jefe = $jefe;

        return $this;
    }

    /**
     * Get the value of fecha_alta
     */ 
    public function getFecha_alta()
    {
        return $this->fecha_alta;
    }

    /**
     * Set the value of fecha_alta
     *
     * @return  self
     */ 
    public function setFecha_alta($fecha_alta)
    {
        $this->fecha_alta = $fecha_alta;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of comision
     */ 
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set the value of comision
     *
     * @return  self
     */ 
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
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
}



?>