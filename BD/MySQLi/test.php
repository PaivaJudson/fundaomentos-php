<?php

$user = 'root';
$password = '';
$host = '127.0.0.1';
$db = 'aula_bd';


try{
    $mysqli = new mysqli($host, $user, $password, $db);
    if (!$mysqli->connect_errno) {
        echo "Conexao activa";
    } else {
        echo "Erro na conexao";
    }
}catch(Exception $e){
    echo $e->getMessage();
}

$sql = "INSERT INTO aluno(nome, idade, cidade) VALUES('Marcos', 44, 'Campinas')";

if($mysqli->query($sql)){
    echo "Registo inserido com sucesso!";
}

$sql = "UPDATE aluno SET idade = idade + 1 WHERE nome='Marcos'";

if ($mysqli->query($sql)) {
    echo "Registo actualizado com sucesso!";
}