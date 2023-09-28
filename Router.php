<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouterSwitch
{

    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);
        $route = str_replace("carreira/", "",0);

        error_log("Rota requisitada: $route",0);
        $parts = explode("/",$route); //quebrando a requisição
        error_log("Partes da requisição: ".print_r($parts,true),0);

        $page = $parts[0]; //obtenho a pagina
        $operation = count($parts)>1?$parts[1]:null; //obtenho a operacao se for solicitada


        if ($route =='') {
            $this->home();
        } else {
            $this->$page($operation);
        }
    }
}
        
    
   