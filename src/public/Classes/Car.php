<?php 
Class Car {
public $marca = '';
public $modelo = '';
public $cor = '';
public $placa = '';

function ligar(){
    echo "O carro está ligado \n";
}

function desligar(){
    echo "O carro está desligado \n";
}
 function acelerar(){
    echo "O carro acelera \n";
}


}

$car1 = new Car();
$car2 = new Car();

$car1->marca = 'Tesla ';
$car1->modelo = 'Roadster ';
$car1->cor = 'Vermelho ';
$car1->placa = 'MARTE1 ';

$car2->marca = 'Volkswagen ';
$car2->modelo = 'fusca ';
$car2->cor = 'Azul ';
$car2->placa = 'PLUTAO ';

echo $car1->marca;
echo $car2->marca;

$car1->desligar();

$car2->acelerar();