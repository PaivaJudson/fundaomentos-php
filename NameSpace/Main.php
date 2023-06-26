<?php

function cadastro($nome){
    if(strlen($nome) < 5){
        throw  new Exception("O nome da pessoa deve ter ao menos 5 caracteres");
    }
}

try{
    cadastro("Ana");
}catch(Exception $e){
    echo "<p>Erro: ". $e ->getMessage() . "</p>";
}