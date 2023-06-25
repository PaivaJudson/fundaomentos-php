<?php

abstract class Pessoa
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    abstract public function apresentar();
}


class PessoaFisica extends Pessoa
{
    private $cpf;

    public function __construct($nome, $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function apresentar()
    {
        echo "Olá, eu sou " . $this->getNome() . " e meu CPF é " . $this->getCpf() . ".";
    }
}


class PessoaJuridica extends Pessoa
{
    private $cnpj;

    public function __construct($nome, $cnpj)
    {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function apresentar()
    {
        echo "Olá, somos a empresa " . $this->getNome() . " e nosso CNPJ é " . $this->getCnpj() . ".";
    }
}

$pessoaFisica = new PessoaFisica("Maria", "123.456.789-00");
$pessoaJuridica = new PessoaJuridica("Empresa XYZ", "12.345.678/0001-00");


function fazerApresentacao(Pessoa $pessoa)
{
    if ($pessoa) {
        echo $pessoa->apresentar();
        echo "<br>";
    }
}



fazerApresentacao($pessoaFisica);
fazerApresentacao($pessoaJuridica);


