<?php

namespace Sts\Models;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsHome
{
    private array $data;

    public function index(): array 
    {
        $this->data = [
            "title" => "Topo da Pagina",
            "description" => "Descrição do serviço"
        ];

        return $this->data;
    }
}