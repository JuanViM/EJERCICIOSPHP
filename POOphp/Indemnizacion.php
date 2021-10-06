<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Indemnizacion</title>
</head>

<body>
    <?php

    require "Factura.php";

    class indemnizacion
    {

        private $dni = array();
        private $cantidad;




        //Getters
        //get DNI
        public function getDni()
        {
            return $this->dni;
        }

        //get Factura sin IVA
        public function getcantidad()
        {
            return $this->cantidad;
        }


        //Setters
        //set de DNI
        public function setDni($dni)
        {
            $this->dni = $dni;

            return $this;
        }

        //Set cantidad
        public function setCantidad($cantidad)
        {
            $this->cantidad = $cantidad;

            return $this;
        }



        //Metodos

        //devuelve los datos del dni como nombre y apellidos
        public function datosCliente($dni)
        {
            if (is_null($dni)) {
                echo "El dni no existe";
            }else{
            return "Datos del cliente: " . $dni["Nombre"] . $dni["Apellidos"];
            }
        }

        // coge la cantidad y la multiplica por 0,21 para aplciarle el IVA
        public function calculaIVA($cantidad)
        {   
            return $cantidad+$cantidad*0.21;
             
        }

        //devuelve la cantidad total sin IVA, es igual que el getcantidad
        public function totalSinIVA()
        {
            return $this->cantidad;
        }

        //devuelve los datos del dni como nombre y apellidos
        public function imdemnizado($dni)
        {
            if (empty($dni)) {
                echo "El dni no existe";
            }else{
            return $dni["Nombre"] . $dni["Apellidos"];
            }
        }
    }





    ?>

</body>

</html>