<?php

class MathUtils{

    public static function somar($x, $y){
        return $x + $y;
    }

    public static function multiplicar($x, $y){
        return $x * $y;
    }

    public static function subtrair($x, $y)
    {
        return $x - $y;
    }

    public static function dividir($x, $y)
    {
        if ($y != 0) {
            return $x / $y;
        }else{
            throw new DivisionByZeroError("Divisao Por Zero não é permitida.");
        }
    }
}


// echo MathUtils::somar(5, 3); // Resultado: 8
// echo MathUtils::subtrair(10, 4); // Resultado: 6
// echo MathUtils::multiplicar(6, 2); // Resultado: 12
// echo MathUtils::dividir(15, 3); // Resultado: 5

try{
    echo MathUtils::dividir(10, 0); // Resultado: Exception.
}catch(DivisionByZeroError $e){
    echo "<p>Divisao Por Zero</p>";
}


