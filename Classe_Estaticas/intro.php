<?php

class Exemplo{
    private static $contador = 0;

    public static function incrementar(){
        self::$contador++;
        echo "o contador estatico esta em: ". self::$contador . "<br>";
    }
}


Exemplo::incrementar();
Exemplo::incrementar();