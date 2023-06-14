<?php 
session_start();
//$_SESSION['hits'] = $_SESSION['hits'] +1;
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
    // echo 'Esta página foi visualizada ' . $_SESSION['hits'] . ' vezes';
     echo 'Seu nome ' . $_SESSION['nome'];
     ?>
</body>
</html>