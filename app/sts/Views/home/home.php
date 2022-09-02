<?php

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if(!defined('C7E3L8K9E5')){
   header("Location: /");
   die("Erro: Página não encontrada!");
}

echo "View da página home do site<br>";

//Testar o acesso ao arquivo
//http://localhost/celke/app/sts/Views/home/home.php

//Testar o acesso ao arquivo
//http://localhost/celke/app/sts/