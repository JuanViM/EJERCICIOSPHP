<?php

    //clase imagen
    class imagen 
    {
        private $src; // ruta donde se encuentra la imagen
        private $border=0;// ancho que rodea la imagen.
        private $ruta_images; //ruta donde se encuentran las imagenes

        //constructor
        function __construct($src,$border)
        {
            $this->ruta_images = "<img src='$src' border='$border' />";
            
        }
        //metodo para imprimir
        function __toString()
        {
            return $this->ruta_images;
        }

        
        //setters
        //set de SRC
        public function setSrc($src)
        {
            if (file_exists($src)) { //comprobamos si el fichero
                $this->src = $src;
            }else{

                exit("El fichero no es correcto");
            }

           
               
               
        }

        //set de border
        public function setBorder($border)
        {
            if (is_int($border) && $border>=0 ) { // comprobamos si es un entero
                $this->border = $border;
            }else{

                exit("El fichero no es correcto");
            }

            

        
        }
    }
