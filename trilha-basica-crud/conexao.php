<!-- faz a conexao com o banco de dados -->
<?php
    define('HOST', '192.168.1.254');
    define('USER', 'estagiario');
    define('PASS', 'estagio123');
    define('BASE', 'treinamento_daila');

    $conexao = new MySQLi(HOST, USER, PASS, BASE);
    if(!$conexao) {
        echo 'Deu ruim parça!';
    }
