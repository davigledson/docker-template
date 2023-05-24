

<?php

// declare(strict_types=1);
// phpinfo();
// echo 'Olá mundo';

//  $contador = 1;

//  $mensagem = "olá";
//  $versao = array('1.1','2','3.4');

//  print_r($versao);


//  $primeiro_nome = "Maria";
//  echo $primeiro_nome;
//  echo '<hr>';
//  $ultimo_nome = "lourdesddd";
//  echo $ultimo_nome;
// echo '<hr>';
//  $time = array('maria','jose','ana');

//  echo $time[2];
//  echo '<br>';
//  print_r($time);
//  echo '<hr>';
//  echo 'a: [' . true . '] <br/>';
//  echo 'a: [' . false . '] <br/>';

//  $idade = 20;
//  echo 'a: [' . (20>9) . '] <br/>';
//  echo 'b: [' . (5 == 6) . '] <br/>';
//  echo 'c: [' . (1==0) . '] <br/>';
//  echo 'd: [' . (1 === '1') . '] <br/>';
//  echo 'd: [' . "$idade" . '] <br/>';
//  echo '<hr>';
// $saldo = 10;
// if($saldo<100){
//     $deposito = 1000;
//     $saldo += $deposito;

// }

// echo $saldo;
// echo '<hr>';

// $menu = 'sobre';
// switch ($menu) {
//     case 'index';
//         echo 'Escolheu a página Inicial';
//         break;

//     case 'sobre':
//         echo 'Escolheu a página Sobre';
//         break;

//     case 'novidades':
//         echo 'Escolheu a página Novidades';
//         break;
//     case 'links':
//         echo 'Escolheu a página Links';
//         break;

//     default:
//         echo 'Pagina não encontrada';
//         break;
// }



// $tanque =1;
// $tanque <= 1 ? 'Abastecer agora <br/>' : 'Combustivel OK <br/>';
// $statusTanque = $tanque <= 1 ? FALSE : TRUE;

// if($statusTanque) echo 'Combustível OK';

// else echo 'Procurar um posto para abastecer.';

// $cout = 1;
// while ($cout<=10){
//     echo $cout . ' x 10 = ' . $cout *10 . '<br />';
//     ++$cout;
// }
// $cout = 1;
// echo '<br />';


//  $vegetais = array('jerimum','batata','tomate');
// $vegetais[20] = 'melancia';

// echo 'Hoje vou cozinhar ' . $vegetais[0] . '<br/>';
// echo 'Hoje vou cozinhar ' . $vegetais[1] . '<br/>';
// echo 'Hoje vou cozinhar ' . $vegetais[2] . '<br/>';
// echo 'Hoje vou cozinhar ' . $vegetais[20] . '<br/>';

// echo 'Vegetais disponiveis ' . count($vegetais) . '<br/>';
// print_r($vegetais);
// echo ' <br/>';
// var_dump($vegetais);


// $total = count($vegetais);
// for($i=0;$i<$total; $i++){
//     echo 'Hoje vou cozinhar ' . $vegetais[$i] . '<br />';
// }

// $vegetais = array(
//     'jerimum'=>'https://cdn-icons-png.flaticon.com/512/1261/1261113.png',
//     'batata'=>'https://i.pinimg.com/originals/d2/f1/21/d2f12195eb8f743b338f8df854926f98.png',
//     'tomate'=>'https://cdn-icons-png.flaticon.com/512/1486/1486246.png'
// );

// foreach($vegetais as $chave =>$valor){
//     echo 'Hoje vou cozinhar ' . $chave . "<img src=\"$valor\" /> < br/>";
// }

// $estoqueCarros = array(
//     array('Palio',10,125),
//     array('gol',10,200),
//     array('Civic',4,38)
// );

// echo 'Temos' . $estoqueCarros[0][1] . ' ' . $estoqueCarros[0][0] . '<br /> Vendidos' . $estoqueCarros[0][2] .' ';


// print_r([$GLOBALS]);
// echo '<hr/>';
// print_r([$_SERVER]);
//print_r([$_GET]);
// if (empty($_GET['nome'])){
//     echo 'Nome é um campo obrigatório';
// } else {
//     echo $_GET['nome'] . '  obrigado por se inscrever';
// }
//date_default_timezone_set('america/sao_paulo');



// $data = date('d/m/Y');

// $hora = date('H');



// function oi(){
    
// echo ' olá, tudo bem?';

// }

// oi();


// echo '<hr>';

// function strconcat($palavra, $palavra2){
//     return $palavra . $palavra2;
// }

// echo strconcat('Olá', ' a todos!');


// $a = 3;
// function teste()
// {   $a=0;
//     $a += 2;
   
    
// }
// teste();
// echo $a;

// function contador()
// {
//     static $total = 0;
//     return $total++;

// }

// for ($i=1;$i<=5;$i++){
//     echo contador();
// }

