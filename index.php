<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('PORT', '3306');
define('DBNAME', 'test');
define('USER', 'root');
define('PASSWORD', '85163494');

try {
    $dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .
    ";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .
    $e->getMessage();
}
