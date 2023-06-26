<?php

function somar_inteiros($n1, $n2){

    if(is_integer($n1) && is_integer($n2))
        return $n1 + $n2;
    else
        throw new Exception("O valor passado por parâmetro não é um inteiro válido");

}


$n = null;

try{

    $n = somar_inteiros(10, "20");
    echo "<p> o valor da soma: $n </p>";
}catch(Exception $e){
    echo "<p> Ocorreu o erro: ". $e->getMessage(). "</p>";
}finally{
    echo "<p>Sempre chega aqui </p>";
}
