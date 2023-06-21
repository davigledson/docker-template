<?php 


$cout = 1;
while ($cout<=10){
    echo $cout . ' x 10 = ' . $cout *10 . '<br />';
    ++$cout;
}
$cout = 1;
echo '<br />';


 $vegetais = array('jerimum','batata','tomate');
$vegetais[20] = 'melancia';

echo 'Hoje vou cozinhar ' . $vegetais[0] . '<br/>';
echo 'Hoje vou cozinhar ' . $vegetais[1] . '<br/>';
echo 'Hoje vou cozinhar ' . $vegetais[2] . '<br/>';
echo 'Hoje vou cozinhar ' . $vegetais[20] . '<br/>';

echo 'Vegetais disponiveis ' . count($vegetais) . '<br/>';
print_r($vegetais);
echo ' <br/>';
var_dump($vegetais);


$total = count($vegetais);
for($i=0;$i<$total; $i++){
    echo 'Hoje vou cozinhar ' . $vegetais[$i] . '<br />';
}

$vegetais = array(
    'jerimum'=>'https://cdn-icons-png.flaticon.com/512/1261/1261113.png',
    'batata'=>'https://i.pinimg.com/originals/d2/f1/21/d2f12195eb8f743b338f8df854926f98.png',
    'tomate'=>'https://cdn-icons-png.flaticon.com/512/1486/1486246.png'
);

foreach($vegetais as $chave =>$valor){
    echo 'Hoje vou cozinhar ' . $chave . "<img src=\"$valor\" /> < br/>";
}

$estoqueCarros = array(
    array('Palio',10,125),
    array('gol',10,200),
    array('Civic',4,38)
);

echo 'Temos' . $estoqueCarros[0][1] . ' ' . $estoqueCarros[0][0] . '<br /> Vendidos' . $estoqueCarros[0][2] .' ';


