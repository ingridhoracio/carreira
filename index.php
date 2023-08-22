<?php
require_once __DIR__ . '/Router.php';
$request = $_SERVER['REQUEST_URI'];
(new Router())->run($request);