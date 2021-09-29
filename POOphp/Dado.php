
<?php

class dado {

private $minNumDado;
private $maxNumDado;

function getminNumDado(){
    return $this->minNumDado;
}

function getmaxNumDado(){
    return $this->maxNumDado;

}

function setminNumDado($minNumDado){
  
    
    $this->minNumDado = $minNumDado;

}

function setmaxNumDado($maxNumDado){

    $this->maxNumDado = $maxNumDado;
}

function tirarDado($minNumDado,$maxNumDado){

    if ($minNumDado<0 || $maxNumDado>12) {   
        echo "Los dados deben estar entre 0 y 12 ";
    
    }else{

        return  " el resultado ha sido " .rand($minNumDado,$maxNumDado);

    }
    

      

}
    
}
/*
// funcion tirar dados con this
function tirarDados(){

    return rand($this->minNumDado,$this->maxNumDado);  

}
*/
?>