<?php

require_once 'Pessoa.php';

class Cliente extends Pessoa{

    protected $limiteDeCredito;

    public function __construct($nome, $cpf, $limiteDeCredito) {
        parent::__construct($nome, $cpf);
        $this->limiteDeCredito = $limiteDeCredito;
    }

    public function getLimiteDeCredito(){
        return $this->limiteDeCredito;
    }
}