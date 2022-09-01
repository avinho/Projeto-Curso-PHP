<?php

namespace Core;

abstract class Config 
{
    protected function config(): void
    {
        //URL DO PROJETO
        define('URL', 'http://localhost/celke');
        define('URLADM', 'http://localhost/celke/adm/'); 

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados

        
    }
}