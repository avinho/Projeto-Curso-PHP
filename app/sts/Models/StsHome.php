<?php

namespace Sts\Models;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsHome
{
    /** @var array $data Recebe os registros do banco de dados */
    private array $data;

    /** @var object $connection Recebe a conexão com o banco de dados */
    private object $connection;

    public function index(): array 
    {
        $this->data = [
            "title" => "Topo da Pagina",
            "description" => "Descrição do serviço"
        ];

        $connection = new \Sts\Models\helper\StsConn();
        $this->connection = $connection->connectDb();

        return $this->data;
    }
}