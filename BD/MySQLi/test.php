<?php

$user = 'root';
$password = '';
$host = '127.0.0.1';
$db = 'aula_bd';
$mysqli = '';


try {
    $mysqli = new mysqli($host, $user, $password, $db);
    if (!$mysqli->connect_errno) {
        echo "Conexao activa";
    } else {
        echo "Erro na conexao";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


function inserir($mysqli)
{
    $sql = "INSERT INTO aluno(nome, idade, cidade) VALUES('Marcos', 44, 'Campinas')";

    if ($mysqli->query($sql)) {
        echo "Registo inserido com sucesso!";
    }
}


function modificar($mysqli)
{
    $sql = "UPDATE aluno SET idade = idade+1 WHERE idaluno=79";

    if ($mysqli->query($sql)) {
        echo "Registo actualizado com sucesso!";
    }
}


function echoTableHead()
{
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>ID Aluno </td>";
    echo "<td>Idade </td>";
    echo "<td>Cidade </td>";
    echo "</tr>";
}

function echoTableFoot()
{
    echo "</table>";
    echo "<hr>";
    echo "<br>";
}

function consultarCom_fetch_row($mysqli)
{

    $sql = "SELECT * FROM aluno";
    $result = $mysqli->query($sql);
    if (isset($result)) {
        echoTableHead();

        $r = $result->fetch_row();
        while ($r) {
            echo "<tr>";
            echo "<td>" . $r[0] . "</td>";
            echo "<td>" . $r[1] . "</td>";
            echo "<td>" . $r[2] . "</td>";
            echo "<td>" . $r[3] . "</td>";
            echo "</tr>";
            $r = $result->fetch_row();
        }
        echoTableFoot();
    }
}

function consultarCom_fetch_assoc($mysqli)
{

    $sql = "SELECT * FROM aluno";
    $result = $mysqli->query($sql);
    if (isset($result)) {
        echoTableHead();

        $r = $result->fetch_assoc();
        while ($r) {
            echo "<tr>";
            echo "<td>" . $r[0] . "</td>";
            echo "<td>" . $r[1] . "</td>";
            echo "<td>" . $r[2] . "</td>";
            echo "<td>" . $r[3] . "</td>";
            echo "</tr>";
            $r = $result->fetch_row();
        }
        echoTableFoot();
    }
}