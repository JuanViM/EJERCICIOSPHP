<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Factura</title>    
</head>
<body>
    
    <?php

    class Factura
    {
        private $dni = array();
        private $cantidad;
        private $numerofactura;

    
        
        //Getters
        //Get que devuelve los datos de DNI
        public function getDni()
        {
                return $this->dni;
        }
        //Get que devuelve cantidad
        public function getCantidad()
        {
                return $this->cantidad;
        }

        //Get que devuelve el numero de Factura.
        public function getNumerofactura()
        {
                return $this->numerofactura;
        }

        //Setters
        
        //Set de DNI
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }
        
        //Set de Cantidad 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        //Set de numero de Factura
        public function setNumerofactura($numerofactura)
        {
                $this->numerofactura = $numerofactura;

                return $this;
        }

        //Metodos
        //devuelve los datos del dni como nombre y apellidos
        public function datosCliente($dni){
            if (empty($dni)) {
                echo "El dni no existe";
            }else{
            return "Datos de la factura del cliente: " . $dni["Nombre"] . $dni["Apellidos"];
            }
        }

        //devuelve el total de la factura sin el IVA
        public function totalSinIVA(){

            return $this->cantidad;

        }

        //devuelve la factura con el IVA incluido
        public function calculaIVA($cantidad){

            return $cantidad+$cantidad*0.21;

        }

        //Devuelve el numero de la factura
        public function datosFactura(){

            return $this->numerofactura;


        }

    }

    ?>

</body>
</html>