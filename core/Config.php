<?php

namespace Core;

/**
 * Configurações básicas do site.
 *
 * @author avinho <alvaromarttinho@gmail.com>
 */
abstract class Config 
{
    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function config(): void
    {
        //URL DO PROJETO
        define('URL', 'http://localhost/celke');
        define('URLADM', 'http://localhost/celke/adm/'); 

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados

        define('EMAILADM', 'alvaromarttinho@gmail.com');
    }
}