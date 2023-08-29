<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouterSwitch
{
    /**
     * Summary of run
     * @param string $requestUri
     * @return void
     */
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);
        $route = str_replace("carreira/", "", $route);

        if ($route == '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}