<?php

namespace Sts\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Controller da página Contato
 * http://localhost/celke/app/sts/Controllers/Contato.php
 * @author avinho <alvaromarttinho@gmail.com>
 */
class Contato
{

    /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /**
     * Instantiar a classe responsável em carregar a View
     * 
     * @return void
     */
    public function index()
    {
        $this->data = "Mensagem enviada com sucesso!<br>";
        $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}
