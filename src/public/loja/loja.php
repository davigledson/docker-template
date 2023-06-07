<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja php</title>
</head>
<body>
    <?php 
    $cupom = trim($_GET['cupom']);
    $cupom_validos = array('NIVER10','PROMO15');
    $cupomAceito = in_array($cupom, $cupom_validos);

    ?>

    <h1><a href="index.php">Shooping Virtual</a></h1>
    <ul>
        <li>
            <a href="p1.php"> <?php echo ($cupomAceito)?'?cupom=:'.$cupom:'';?></a>Produto 1
        </li>
        <li>
            <a href="p2.php"> <?php echo ($cupomAceito)?'?cupom=:'.$cupom:'';?></a>Produto 2
        </li>
    </ul>

<form action="/src/public/index.php" method="get">
Cupom de desconto:
<?php 
if($cupomAceito){
    
?>
<strong><?php echo $cupom;?></strong>
<img src="ok" alt="">

<?php } else{?>

<input type="text" name="cupom"> <input type="submit">

<?php }?>
</form>
</body>
</html>