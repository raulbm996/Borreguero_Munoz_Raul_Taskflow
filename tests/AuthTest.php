<?php
use PHPUnit\Framework\TestCase;

require_once '../app/controllers/AuthController.php';
require_once '../app/data.php';

class AuthTest extends TestCase
{
    public function testLoginConCredencialesValidas()
    {
        global $usuarios_bbdd;

        $resultado = handleLogin('usuario1@taskflow.com', 'pass123', $usuarios_bbdd);
        $this->assertTrue($resultado);
    }
    public function testLoginConCredencialesInvalidas()
    {
        global $usuarios_bbdd;

        $resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo', $usuarios_bbdd);
        $this->assertFalse($resultado);
    }

}

?>