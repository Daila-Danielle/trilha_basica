<!-- faz a conexao com o banco de dados -->
<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'treinamento_daila');

    $conexao = new MySQLi(HOST, USER, PASS, BASE);
    if(!$conexao) {
        echo 'Deu ruim parça!';
    }
