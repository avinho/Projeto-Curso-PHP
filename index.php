<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Carregar o Composer
        require './vendor/autoload.php';
        //Instanciar a classe ConfigController, responsável em tratar a URL
        $url = new Core\ConfigController();
        //Instanciar o método para carregar a página/controller
        $url->loadPage();
    ?>
</body>
</html>