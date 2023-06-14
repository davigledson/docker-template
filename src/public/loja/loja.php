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
    $cupom='';
    if(isset($_GET['cupom'])) $cupom = trim($_GET['cupom']); 

     $cupom_validos = array('NIVER10','PROMO15');
     
     if(isset($_GET['cupom'])) $cupomAceito = in_array($cupom, $cupom_validos);
    $cupomAceito = in_array($cupom, $cupom_validos);
    

    ?>

    <h1><a href="loja.php">Shooping Virtual</a></h1>
    <ul>
        <li>
            <a href="p1.php<?php echo ($cupomAceito)?'?cupom='.$cupom:'';?>">Produto 1</a> 
        </li>

        <li>
            <a href="p2.php<?php echo ($cupomAceito)?'?cupom='.$cupom:'';?>">Produto 2</a>
        </li>   
    </ul>

<form action="loja.php" method="get">
Cupom de desconto:
<?php 
if($cupomAceito){
    
?>
<strong><?php echo $cupom;?></strong>

<!-- <img src="https://icons.iconarchive.com/icons/custom-icon-design/flastastic-9/16/Accept-icon.png" alt=""> -->

<?php } else{?>

<input type="text" name="cupom"> <input type="submit">

<?php }?>

</form>
</body>
</html>