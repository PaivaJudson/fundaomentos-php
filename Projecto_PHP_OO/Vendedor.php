<?php

require_once "Pessoa.php";

class Vendedor extends Pessoa {

    protected $matricula;

    public function __construct($nome, $cpf, $matricula)
    {
        parent::__construct($nome, $cpf);
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

}
