<?php abstract class RouterSwitch {
    function home(){
        return __DIR__ . '/pages/home/index.php';
    }
    function login(){
        return __DIR__ . '/pages/login/index.php';
    }
    function candidatura(){
        return __DIR__ . '/pages/candidatura/index.php';
    }
    function cargo(){
        return __DIR__ . '/pages/cargo/index.php';
    }
    function empresa(){
        return __DIR__ . '/pages/empresa/index.php';
    }
    function recrutador(){
        return __DIR__ . '/pages/recrutador/index.php';
    }
    protected function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/pages/not-found.html';
    }
}