<?php

//namespace PessoaFisica;
//use PessoaJuridica\Pessoa;

use PessoaJuridica\Pessoa as PessoaJ;

require_once('pessoa1.php');
require_once('pessoa2.php');

$p = new PessoaJ("Judson Paiva", "Luanda - Angola");
$p->imprimir();