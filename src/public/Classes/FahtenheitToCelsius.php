<?php 

class FahtenheitToCelsius{
   private $temperatura;

    //Método construtor

    function __construct($temp){
        $this->setTemperatura($temp) ;
    }

    //Método para exibir a temperatura
    function getTemperatura(){
        return 5.0 /9.0 * ($this->temperatura -32.0);
    }
    function setTemperatura($temp){
        if ($temp >=-459.67){
            $this->temperatura = $temp;
        }
        else{
            throw new Exception('Não existem temperatura inferior a -459.67');
        }
    }
}

$x = new FahtenheitToCelsius(-50);
echo $x->temperatura;
echo $x->getTemperatura(). '<br>';
