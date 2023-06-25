<?php

namespace PessoaFisica;

class Pessoa
{
    private $nome;
    private $endereco;

    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function imprimir()
    {
        echo "<br>";
        echo "<h3>Sou pessoa Física </h3>";
        echo "<p>Nome " . $this->nome . " </p>";
        echo "<p>Endereco " . $this->endereco . " </p>";
        echo "<br>";
    }
}
