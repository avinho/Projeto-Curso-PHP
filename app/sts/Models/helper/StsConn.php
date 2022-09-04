<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsConn 
{
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private int $port = PORT;
    private object $connect;

    public function connectDb(): object
    {
        try {
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname,
             $this->user, $this->pass);
             return $this->connect;
        } catch (PDOException $e) {
            die("<strong>Erro:</strong> Por favor tente novamente. Caso o problema persista, entre em contato o administrador: " . EMAILADM);
        }
    }
}