<?php 

function oi(){
    
echo ' olá, tudo bem?';

}

oi();


echo '<hr>';

function strconcat($palavra, $palavra2){
    return $palavra . $palavra2;
}

echo strconcat('Olá', ' a todos!');


$a = 3;
function teste()
{   $a=0;
    $a += 2;
   
    
}
teste();
echo $a;

function contador()
{
    static $total = 0;
    return $total++;

}

for ($i=1;$i<=5;$i++){
    echo contador();
}
?>