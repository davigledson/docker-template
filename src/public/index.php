<?php
//declare(strict_types=1);
//phpinfo();
echo 'Olá mundo';

 $contador = 1;

 $mensagem = "olá";
 $versao = array('1.1','2','3.4');

 print_r($versao);


 $primeiro_nome = "Maria";
 echo $primeiro_nome;
 echo '<hr>';
 $ultimo_nome = "lourdesddd";
 echo $ultimo_nome;
echo '<hr>';
 $time = array('maria','jose','ana');

 echo $time[2];
 echo '<br>';
 print_r($time);
 echo '<hr>';
 echo 'a: [' . true . '] <br/>';
 echo 'a: [' . false . '] <br/>';

 $idade = 20;
 echo 'a: [' . (20>9) . '] <br/>';
 echo 'b: [' . (5 == 6) . '] <br/>';
 echo 'c: [' . (1==0) . '] <br/>';
 echo 'd: [' . (1 === '1') . '] <br/>';
 echo 'd: [' . "$idade" . '] <br/>';
 echo '<hr>';
$saldo = 10;
if($saldo<100){
    $deposito = 1000;
    $saldo += $deposito;

}

echo $saldo;
echo '<hr>';
