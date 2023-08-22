<?php abstract class RouterSwitch
{

    protected function home()
    {
        require __DIR__ . '/pages/home/index.php';
    }
    protected function login()
    {
        require __DIR__ . '/pages/login/index.php';
    }
    protected function candidatura()
    {
        require __DIR__ . '/pages/candidatura/index.php';
    }

    protected function cargo()
    {
        require __DIR__ . '/pages/cargo/index.php';
    }
    protected function empresa()
    {
        require __DIR__ . '/pages/empresa/index.php';
    }
    protected function recrutador()
    {
        require __DIR__ . '/pages/recrutador/index.php';
    }

    public function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/pages/not-found.html';
    }

}