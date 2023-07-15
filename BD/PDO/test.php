<?php

$user = 'root';
$password = '';
$host = '127.0.0.1';
$db = 'aula_bd';
$mysqli = '';


try {
    $mysqli = new mysqli($host, $user, $password, $db);
    if (!$mysqli->connect_errno) {
        echo "Conexao activa <br />";
    } else {
        echo "Erro na conexao <br />";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
