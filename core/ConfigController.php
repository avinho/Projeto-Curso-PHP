<?php

namespace Core;
/**
 * Recebe a URL e manipula
 * Carrega a CONTROLLER
 * 
 * @author avinho <alvaromarttinho@gmail.com>
 */
class ConfigController extends Config
{
    /** @var string $url Recebe a URL do .htacess */    
    private string $url;
    /** @var array $urlArray Recebe a URL convertida em um array */  
    private array  $urlArray;
    /** @var string $url Recebe a URL do .htacess */  
    private string $urlController;
    /** @var string $url Recebe a URL do .htacess */  
    private string $urlParameter;
    /** @var string $url Recebe a URL do .htacess */  
    private string $urlSlugController;
    /** @var string $url Recebe a URL do .htacess */  
    private array  $format;

    /**
     * Recebe a URL do .htaccess
     * Validar a URL
     */
    public function __construct()
    {   
        $this->config();
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT); 

            $this->clearUrl();

            $this->urlArray = explode("/",$this->url);
            if(isset($this->urlArray[0])) {
                $this->urlController = $this->slugController($this->urlArray[0]);
            } else {
                $this->urlController = $this->slugController(CONTROLLERERRO);
            }

        } else {
            $this->urlController = $this->slugController(CONTROLLER);
        }
        echo "Controller: {$this->urlController}<br>";
    }

    /**
     * Limpara a URL, elimando as TAG, os espaços em brancos, retirar a barra no final da URL e retirar os caracteres especiais
     *
     * @return void
     */
    private function clearUrl(): void 
    {
        //Eliminar as Tag
        $this->url = strip_tags($this->url);
        //Eliminar os espaços em branco
        $this->url = trim($this->url);
        //Eliminar a barra no final da URL
        $this->url = rtrim($this->url, "/");
        //Eliminar caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }
    /**
     * Converter o valor obtido da URL "sobre-empresa" e converter no formato da classe "SobreEmpresa".
     * Utilizado as funções para converter tudo para minúsculo, converter o traço pelo espaço, converter cada letra da primeira palavra para maiúsculo, retirar os espaços em branco
     *
     * @param string $slugController Nome da classe
     * @return string Retorna a controller "sobre-empresa" convertido para o nome da Classe "SobreEmpresa"
     */
    private function slugController($slugController) 
    {
        //Converter para minusculo
        $this->urlSlugController = strtolower($slugController);
        //Converter o traco para espaco em braco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //Converter a primeira letra de cada palavra para maiusculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //Retirar espaco em branco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }
    /**
     * Carregar as Controllers.
     * Instanciar as classes da controller e carregar o método index.
     *
     * @return void
     */
    public function loadPage()
    {
        $classLoad = "\\Sts\\Controllers\\" . $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }
}