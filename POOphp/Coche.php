<?php


    class coche{

        private $tipo_Combustible;
        private $cantidadCombustible;
        private $velocidad;
        private $capacidadcombustible;
        private $litrosreserva;

    //getters
        function getTipoCombustible(){

            return $this->tipo_Combustible;

        }

        function getcantidadCombustible(){

            return $this->cantidadCombustible;

        }
        function getVelocidad(){

            return $this->velocidad;

        }

        function getCapacidadCombustible(){

            return $this->capacidadcombustible;
        }

        function getLitrosReserva(){

            return $this->litrosreserva;
        }
        
        //Setters

        function setTipo_Combustible($tipo_Combustible){

            $this->tipo_Combustible = $tipo_Combustible;

        }

        function cantidadCombustible($cantidadCombustible){

            $this->cantidadCombustible = $cantidadCombustible;

        }

        function velocidad($velocidad){

            $this->velocidad = $velocidad;

        }

        function capacidadcombustible($capacidadcombustible){

            $this->capacidadcombustible = $capacidadcombustible;

        }

        function litrosreserva($litrosreserva){

            $this->litrosreserva = $litrosreserva;

        }

        //funciones

        function movimiento(){

            if ($this->velocidad>0) {
                return true;
            }

            return false;

        }

        function seEncuentraReserva(){
            
            if ($this->cantidadCombustible<=$this->litrosreserva) {
                return true;
            }

            return false;

        }

        function acelerar(){

            $this->velocidad = $this->velocidad++;

        }

        function frenar(){

            $this->velocidad = $this->velocidad--;


        }


        function repostar(){
            if ($this->movimiento()==true) {
                return false;
            }

            $this->cantidadCombustible = $this->cantidadCombustible++;

        }



    }
