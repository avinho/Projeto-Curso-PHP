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

        $query_home_top = "SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops LIMIT 1";
        $result_home_top = $this->connection->prepare($query_home_top);
        $result_home_top->execute();
        $this->data = $result_home_top->fetch();

        var_dump($this->data);

        return $this->data;
    }
}