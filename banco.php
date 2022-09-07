<?php

require_once 'conta.php';
require_once 'Titular.php';
require_once 'cpf.php';

$rafael = new titular(new Cpf('123.456.789-10'), 'Rafael Teles');
$primeiraConta = new Conta($rafael);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;          //Chamando o metodo recuperar saldo.
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();