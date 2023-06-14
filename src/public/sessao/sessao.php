<?php 
session_start();
$_SESSION['hits'] = $_SESSION['hits'] +1;

$_SESSION['nome']  = 'davi'; // no sessao 2 estára o seu nome
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
     echo 'Esta página foi visualizada ' . $_SESSION['hits'] . ' vezes';
     ?>
</body>
</html>