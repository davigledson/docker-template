<?php 

print_r([$GLOBALS]);
echo '<hr/>';
print_r([$_SERVER]);
print_r([$_GET]);
if (empty($_GET['nome'])){
    echo 'Nome é um campo obrigatório';
} else {
    echo $_GET['nome'] . '  obrigado por se inscrever';
}
date_default_timezone_set('america/sao_paulo');



$data = date('d/m/Y');

$hora = date('H');



?>