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
    echo "<td>Nome </td>";
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

function consultar_com_fetch_row($mysqli)
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

function consultar_com_fetch_assoc($mysqli)
{
    $sql = "SELECT * FROM aluno";
    $result = $mysqli->query($sql);
    if (isset($result)) {

        echoTableHead();

        $r = $result->fetch_assoc();
     
        while ($r) {
            echo "<tr>";
            echo "<td>" . $r['idaluno'] . "</td>";
            echo "<td>" . $r['nome'] . "</td>";
            echo "<td>" . $r['idade'] . "</td>";
            echo "<td>" . $r['cidade'] . "</td>";
            echo "</tr>";
            $r = $result->fetch_assoc();
        }
        echoTableFoot();
    }
}


function num_linhas($mysqli){
    
    $sql = "SELECT * FROM aluno";
    $result = $mysqli->query($sql);

    return $result->num_rows;
}


function inserir_usando_bind_param($mysqli){

    $nome = "Judson Paiva";
    $idade = 29;
    $cidade = "Luanda";

    $sql = "INSERT INTO aluno(nome, idade, cidade) VALUES(?, ?, ?)";
    $statement = $mysqli->prepare($sql);

    if(isset($statement)){
        $statement->bind_param('sis', $nome, $idade, $cidade);
        $statement->execute();

        $statement->close();
    }
}


function apagar($mysqli){

    $idaluno = 80;
    $sql = "DELETE FROM aluno WHERE idaluno=?";
    $stmt = $mysqli->prepare($sql);

    if(isset($stmt)){

        $stmt->bind_param("i", $idaluno);
        $stmt->execute();

        $stmt->close();

    }else{
        echo "<p>Erro ao eliminar</p>";
    }
}

function consultar_com_bind($mysqli){
    
    $nome   = '';
    $idade  = ''; 
    $cidade = "";
    $str = "%Fortaleza";
    
    $sql = "SELECT nome, idade, cidade FROM aluno WHERE cidade LIKE ?";
    $statement = $mysqli->prepare($sql);

    if (isset($statement)) {
        $statement->bind_param("s", $str);
        $statement->execute();

        $statement->bind_result($nome, $idade, $cidade);
        // $res = $statement->store_result();

        while ($statement->fetch()) {
            echo "<p>Nome: $nome | Idade: $idade | Cidade: $cidade </p>";
        }

        if($statement->num_rows === 0){
            echo "<p>Sem resultados com o Bind</p>";
        }

        $statement->close();
    }
}


consultar_com_bind($mysqli);
// inserir_usando_bind_param($mysqli);
// echo "<br>". num_linhas($mysqli);