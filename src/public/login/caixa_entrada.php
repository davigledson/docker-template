
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caixa de entrada</title>
    </head>
    <body>
    <?php 
        $usuarios = array();
        $usuarios['maria']['nome'] = 'maria da silva';
        $usuarios['maria']['id'] = 1234;
        $usuarios['joao']['nome'] = 'joao alfredo';
        $usuarios['joao']['id']=5678;
        $userlogin = $_POST['login'];
        $useID = $usuarios[$userlogin]['id'];
        
        ?>

        <h1>Ola <?php echo $usuarios[$userlogin]['nome'];?></h1>

        <form action="apagar.php" method="post">
        <ul>
            <li>E-mail 1</li>
            <li>E-mail 2</li>
        </ul>
        
        <input type="hidden" name="id" value="<?php echo $useID;?>">
        </form>
        <a href="https://www.google.com/search?q=davigledson">Busca</a>
    </body>
    </html>
