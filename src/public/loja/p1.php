<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p1</title>
</head>
<body>
    <?php 
    $cupom['NIVER10']=10;
    $cupom['PROMO15']=15;
    $desconto = 0;
    
    if(isset($_GET['cupom'])){
        $desconto = $cupom[$_GET['cupom']];
    }
    $preco = 200;
    
    ?>
    <h1><a href="loja.php">
       <img src="image1" alt="">

    </a>
</h1>
<img src="image 2" alt="">
<h3>Preco: R$ <?php echo (($preco * (100 - $desconto) / 100)); ?></h3>
</body>
</html>