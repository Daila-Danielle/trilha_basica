<?php

namespace App\DAO;

abstract class DAO {

    protected $conexao;

    public function __construct()
    {
        define('HOST', '192.168.1.254');
        define('USER', 'estagiario');
        define('PASS', 'estagio123');
        define('BASE', 'treinamento_daila');
        
        $this->conexao = new \MySQLi(HOST, USER, PASS, BASE);

    }
}